<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Http\Requests\StoreBrandsRequest;
use App\Http\Requests\UpdateBrandsRequest;
use App\Models\dealers;

class BrandsController extends Controller
{
    public function getBrandsdata(){
        $data = Brands::with('dealers')->get(); 
        echo "<pre>";
        print_r($data->toArray());
        echo "</pre>";
    }


    public function belongsToManyDealers(){
        $data = Brands::with('belongsToManyDealers')->get(); 
        echo "<pre>";
        print_r($data->toArray());
        echo "</pre>";
    }

}
