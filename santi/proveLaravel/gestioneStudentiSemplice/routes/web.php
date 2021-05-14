<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

//Route::resource('students', StudentController::class);


Route::get('/', function () {
    return view('students\Index');
});

Route::resource('students', 'App\Http\Controllers\StudentController');
