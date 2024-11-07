<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\RightmoveData;

class Property extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'store:property';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is used for storing property details in DB.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $next = true;
        $index = 0;
        while($next){
            $url =  'https://www.rightmove.co.uk/property-for-sale/find.html?locationIdentifier=OUTCODE%5E1859&index='.$index.'&propertyTypes=&includeSSTC=false&mustHave=&dontShow=&furnishTypes=&keywords=';
            $rightmoveData = new RightmoveData($url);
            $total = $rightmoveData->getData();
            $index = $index + 24;
            $this->info($index);

            if($index >= $total){
                $next = false;
            }
        }
        $this->info("Properties stored successfully!");
    }
}
