<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('product');
});

Route::get('product', [ProductController::class, 'index'])->name('product');
Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('product/create', [ProductController::class, 'store'])->name('product.store');
Route::delete('product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::patch('product/{product}', [ProductController::class, 'update'])->name('product.update');