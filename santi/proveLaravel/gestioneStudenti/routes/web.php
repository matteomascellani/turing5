<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
     return view('welcome');
 });

Route::get('/prova', "StudentController@index");
Route::get('/edit/{id}', "StudentController@edit");
Route::get('/show/{id}', "StudentController@show");
Route::get('/create', "StudentController@create");
Route::post('/store', "StudentController@store");
Route::post('/update{id}', "StudentController@update");


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

