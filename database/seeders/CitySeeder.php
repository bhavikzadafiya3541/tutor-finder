<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            "City One",
            "City Two",
            "City Three",
            "City Four",
            "City Five"
        ];

        foreach($cities as $city) {
            City::firstOrCreate([
                'name' => $city
            ]);
        }
    }
}
