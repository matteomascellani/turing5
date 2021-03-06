<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistsController;
use App\Http\Controllers\OriginController;
use App\Http\Controllers\CountriesController;
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
Route::resource('origins', OriginController::class);
Route::resource('countries', countriesController::class);
Route::resource('artists', ArtistsController::class);
Route::get('/', function () {
    return view('homepage');
});
Route::get('/', function () {
    return view('welcome');
});
