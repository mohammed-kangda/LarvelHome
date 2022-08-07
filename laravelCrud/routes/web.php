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

Route::get('/crud/create',[CrudOperationsController::class,'create'])->name('crud.create');
Route::post('/crud',[CrudOperationsController::class,'store'])->name('crud.store');
Route::get('/index',[CrudOperationsController::class,'index'])->name('crud.index');

Route::get('/show/{id}',[CrudOperationsController::class,'show'])->name('crud.show');


Route::get('/crud/{id}/edit',[CrudOperationsController::class,'edit'])->name('crud.edit');


Route::put('/update/{id}',[CrudOperationsController::class,'update'])->name('crud.update');


Route::get('/delete/{id}',[CrudOperationsController::class,'destroy'])->name('crud.delete');


