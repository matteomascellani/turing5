<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ProfessorsController;
use App\Models\Book;
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
Route::resource('professors', ProfessorsController::class);
Route::resource('students', StudentsController::class);
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('professors/{professorId}/students',[StudentsController::class,'listProfessorStudents'])->name('professors.student.index');//METHOD prendre tous les eleves dun prof
Route::post('professors/{professorId}/students',[StudentsController::class,'addProfessorStudents']);
Route::delete('professors/{professorId}/students',[StudentsController::class,'deleteProfessorStudents']);
Route::get('students/{studentId}/professors', [ProfessorsController::class,'listprofessors']);
























