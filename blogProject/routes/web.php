<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::get('/add-blog',[BlogController::class,'addBlog'])->name('add-blog');
    Route::post('/new-blog',[BlogController::class,'saveBlog'])->name('new-blog');
    Route::get('/manage-blog',[BlogController::class,'manageBlog'])->name('manage-blog');

    Route::get('/add-category',[CategoryController::class,'addCategory'])->name('add-category');
    Route::get('/manage-category',[CategoryController::class,'manageCategory'])->name('manage-category');
    Route::post('/new-category',[CategoryController::class,'saveCategory'])->name('new-category');
    Route::get('/status/{id}/{for}',[CategoryController::class,'status'])->name('status');
    Route::post('/delete-category',[CategoryController::class,'deleteCategory'])->name('delete-category');
    Route::get('/edit-category/{id}',[CategoryController::class,'editCategory'])->name('edit-category');
    Route::post('update-category',[CategoryController::class,'updateCategory'])->name('update-category');

    Route::get('add-author',[AuthorController::class,'addAuthor'])->name('add-author');
    Route::post('new-author',[AuthorController::class,'saveAuthor'])->name('new-author');
    Route::get('manage-author',[AuthorController::class,'manageAuthor'])->name('manage-author');
    Route::get('status/{id}',[AuthorController::class,'status'])->name('status');
    Route::post('delete-author',[AuthorController::class,'deleteAuthor'])->name('delete-author');
    Route::get('edit-author/{id}',[AuthorController::class,'editAuthor'])->name('edit-author');
    Route::post('update-author',[AuthorController::class,'updateAuthor'])->name('update-author');
});
