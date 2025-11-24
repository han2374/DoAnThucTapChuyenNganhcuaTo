<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');





use App\Http\Controllers\Admin\CategoryController;
Route::get('/admin/category', [CategoryController::class, 'index'])->name('category');
use App\Http\Controllers\Admin\ProductController;
Route::get('/admin/product', [ProductController::class, 'index'])->name('product');
Route::get('/account/info', function () {
    return view('account.info');
})->name('account.info')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');