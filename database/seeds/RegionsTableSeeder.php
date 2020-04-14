<?php

use App\Region;
use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::insert([
            [
                "name" => "OUEST",
                "slug" => "OU"
            ],
            [
                "name" => "NORD-OUEST",
                "slug" => "NO"
            ],
            [
                "name" => "SUD-OUEST",
                "slug" => "SO"
            ],
            [
                "name" => "NORD",
                "slug" => "ND"
            ],
            [
                "name" => "EXTREME-NORD",
                "slug" => "EN"
            ],
            [
                "name" => "SUD",
                "slug" => "SD"
            ],
            [
                "name" => "EST",
                "slug" => "ES"
            ],
            [
                "name" => "LITTORAL",
                "slug" => "LT"
            ],
            [
                "name" => "CENTRE",
                "slug" => "CE"
            ],
        ]);
    }
}
