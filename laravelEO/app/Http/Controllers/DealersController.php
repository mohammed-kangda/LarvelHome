<?php

namespace App\Http\Controllers;

use App\Models\dealers;
use App\Http\Requests\StoredealersRequest;
use App\Http\Requests\UpdatedealersRequest;

class DealersController extends Controller
{
    public function getDealersdata(){
        $data = dealers::with('brands')->get(); 
        echo "<pre>";
        print_r($data->toArray());
        echo "</pre>";
    }

    public function belongsToManyBrands(){
        $data = dealers::with('belongsToManyBrands')->get(); 
        echo "<pre>";
        print_r($data->toArray());
        echo "</pre>";
    }
}
