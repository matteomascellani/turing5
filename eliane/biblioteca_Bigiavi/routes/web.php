<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\LoansController;
use App\Http\Controllers\SubscribersController;
use App\Http\Requests\subscriberRequest;
use App\Models\Subscriber;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('languages', LanguagesController::class);
Route::resource('countries',CountriesController::class);
Route::resource('categories', CategoriesController::class);
Route::resource('authors',AuthorsController::class);
Route::resource('books',BooksController::class);
Route::resource('subscribers',SubscribersController::class);
Route::resource('loans',LoansController::class);

Route::get('authors/{authorId}/books',[BooksController::class,'libriAuthor'] );
//Route::get('/search',[AuthorsController::class,'search']);
//Route::get('/searchBooks', [BooksController::class,'searchBooks']);
Route::get('searchSubscriber',[SubscribersController::class,'searchSubscriber']);

