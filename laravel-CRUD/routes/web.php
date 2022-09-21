<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [FrontEndController::class, 'index'])->name('/');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/new-student',[StudentController::class, 'index'])->name('new.student'); // new.student is route name for use frontend files
Route::post('/student-delete',[StudentController::class, 'delete'])->name('student.delete');
Route::get('/student-edit/{id}',[StudentController::class, 'edit'])->name('student.edit');
Route::post('/student-update',[StudentController::class, 'update'])->name('update.student');
