<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\DealersController;
use App\Http\Controllers\RelationalController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [StudentController::class,'show']);
Route::get('/brandsData',[BrandsController::class,'getBrandsdata']);
Route::get('/dealersData',[DealersController::class,'getDealersdata']);
Route::get('/belongsToManyBrands',[BrandsController::class,'belongsToManyDealers']);
Route::get('/belongsToManyDealers',[DealersController::class,'belongsToManyBrands']);

Route::get('/viewCities',[RelationalController::class,'viewCities'])->name('country');