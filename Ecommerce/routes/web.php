<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [EcommerceController::class, 'index'])->name('/');
Route::get('/product-details', [EcommerceController::class, 'productDetails'])->name('product-details');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::get('/dashboard',[AdminController::class, 'index'])->name('dashboard');
    Route::get('add-product',[ProductController::class, 'addProduct'])->name('add-product');
    Route::get('manage-product',[ProductController::class, 'manageProduct'])->name('manage-product');
    Route::post('new-product',[ProductController::class, 'saveProduct'])->name('new-product');
    Route::get('product-delete/{id}',[ProductController::class, 'deleteProduct'])->name('product-delete');
});
