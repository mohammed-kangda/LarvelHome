<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class RelationalController extends Controller
{
    public function viewCities(Request $request){
        
        // $cities = new \stdClass;
        $countries = Country::get();
        echo "<pre>";
        echo $request->country;
        echo "</pre>";
        // if(isset($request->country)){
        //     $cities = Country::where('id',$request->country);
        //     $cities = $cities->cities;
        // }
        return view('country','countries');
    }
}
