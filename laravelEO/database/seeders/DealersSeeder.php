<?php

namespace Database\Seeders;
use App\Models\dealers;

use Illuminate\Database\Seeder;

class DealersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1 ; $i < 11 ; $i++){

            dealers::create([
                'brand_id' => $i,
                'name' => "Dealer Name $i",
                'description' => "Dealer Description $i",
                'location' => "Dealer Location $i"
            ]);
        }
    }
}
