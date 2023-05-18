<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('home', ['title' => 'Home']);
})->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('products', [ProductController::class, 'products'])->name('products');

Route::get('product/create', [ProductController::class, 'create'])->name('create');
Route::post('product/create', [ProductController::class, 'create_action'])->name('create.action');
Route::delete('product/delete/{product}', [ProductController::class, 'delete'])->name('delete.action');
