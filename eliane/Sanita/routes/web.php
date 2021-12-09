<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\doctorController;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\doctorController::class, 'index'])->name('doctor');
Route::resource('doctors', doctorController::class);
