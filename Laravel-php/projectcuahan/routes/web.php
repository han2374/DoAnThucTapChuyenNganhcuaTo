<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
Route::get('/single', function () {
    return view('single');
})->name('single');
Route::get('/admin', function () {
    return view('admin');
})->name('admin');
Route::get('/admin/category', function () {
    return view('admin/category/category-list');
})->name('category');
Route::get('/admin/product', function () {
    return view('admin/product/product-list');
})->name('product');