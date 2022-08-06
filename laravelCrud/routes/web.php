<?php

use App\Http\Controllers\CrudOperationsController;
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

// Route::get('/register', function () {
//     return view('Template.registration');
// });

Route::get('/crud/create',[CrudOperationsController::class,'create']);
