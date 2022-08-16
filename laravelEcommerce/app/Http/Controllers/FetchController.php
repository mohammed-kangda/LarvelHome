<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\ProductsDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class FetchController extends Controller
{
    public function index(){
      $data =  ProductsDetail::select('products.*','products_id','products.product_name','products_price')
               ->join('products','products.id','products_detail.products_id')->get();
       echo "<pre>";
       print_r($data->toArray());
    }
}
