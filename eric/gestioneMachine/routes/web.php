<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\CustomersController;
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
Route::resource('customers', CustomersController::class);
Route::resource('cars', CarsController::class);
Route::get('/', function () {
    return view('homepage');
});
