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

# displaying form to user

Route::get('/crud/create',[CrudOperationsController::class,'create'])->name('crud.create');

# storing user entered data in db

Route::post('/crud',[CrudOperationsController::class,'store'])->name('crud.store');

# displaying data to user (AP)

Route::get('/index',[CrudOperationsController::class,'index'])->name('crud.index');


# displaying data to user (F)

Route::get('/show/{id}',[CrudOperationsController::class,'show'])->name('crud.show');

# providing form to user to edit details

Route::get('/crud/{id}/edit',[CrudOperationsController::class,'edit'])->name('crud.edit');

# updating user details

Route::put('/update/{id}',[CrudOperationsController::class,'update'])->name('crud.update');

# delete user records

Route::get('/delete/{id}',[CrudOperationsController::class,'destroy'])->name('crud.delete');


