<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Support\Facades\DB;
use App\Models\Listing;

class ScrapAuctions extends Command
{
    protected $signature = 'scrap:auctions';

    protected $description = 'Scrape auction data';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $auctionId = 1174;
        $url = "https://mchughandco.com/Auctions/LotList.aspx?aid=" . $auctionId;

        $client = new Client();
        $crawler = $client->request('GET', $url);

        $data = [];

        $geoHiddenInput = $crawler->filter('input[name="ctl00$mainContent$GmapGeoHidden"]');
        $geoData = $geoHiddenInput->attr('value');
        $auctionDetailledData = explode(';', $geoData);
        $crawler->filter('tr.rgRow')->each(function ($row,$index) use (&$data,$auctionDetailledData,$auctionId) {
            $cells = $row->filter('td');
            $type = $cells->eq(1)->text();
            $address = $cells->eq(2)->text();
            $id = $cells->eq(0)->text();
            $priceText = $cells->eq(3)->text();

            if (strpos($priceText, '£') !== false) {
                $price = (int)preg_replace('/[^\d]/', '', $priceText);
            } else {
                $price = trim($priceText);
            }

            $addressParts = explode(' ', $address);
            if (count($addressParts) >= 2) {
                $postcode = $addressParts[count($addressParts) - 2] . ' ' . end($addressParts);
            } else {
                $postcode = 'N/A';
            }
            $count =  $index * 4;
            $longitude = $auctionDetailledData[$count];
            $latitude = $auctionDetailledData[$count + 1];
            $uuid = $auctionDetailledData[$count + 2];
            $price = gettype($price) == 'integer' ? $price : 0;

            Listing::create([
                'auction_id' => $auctionId,
                'type' => $type,
                'longitude' => $longitude,
                'latitude' => $latitude,
                'address' => $address,
                'postcode' => $postcode,
                'price' => $price,
                'uuid' => $uuid,
            ]);
        });

        $this->info('auction details stored successfully!');
    }
}
