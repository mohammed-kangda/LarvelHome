<?php

namespace Database\Seeders;

use App\Models\Brands;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */

    public function run()
    {
        for($i=1 ; $i<11 ; $i++){
            Brands::create([
               'brand_id' => $i,
               'name' => "Brand Name $i",
               'description' => "Brand Description $i",
               'location' => "Dealer Location $i",
            ]);
        }
    }
}
