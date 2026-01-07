<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryShowController;
use App\Http\Controllers\TopicShowController;
use App\Http\Controllers\ProductSearchController;
use App\Models\Topic;
use Illuminate\Support\Facades\Schema;

use App\Models\BlogPost;

Route::get('/', function () {
    $posts = BlogPost::orderBy('published_at', 'desc')->take(6)->get();
    return view('index', ['posts' => $posts]);
})->name('home');

Route::post('logout',[HomeController::class, 'logout'])->name('logout');
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/categories', [CategoryShowController::class, 'index'])->name('category.index');
Route::get('/categories/{category}', [CategoryShowController::class, 'show'])->name('category.show');

// Product search
Route::get('/search', [ProductSearchController::class, 'search'])->name('products.search');

Route::get('/portfolio', function () {
    // pass active topics to the portfolio view (guard if table not migrated yet)
    if (Schema::hasTable('topics')) {
        // eager-load active videos so we can render them on the same page
        $topics = Topic::where('status', 1)
            ->with(['videos' => function ($q) { $q->where('status', 1); }])
            ->get();
    } else {
        $topics = collect();
    }
    return view('portfolio', compact('topics'));
})->name('portfolio');

// Topics (public)
Route::get('/topics', [TopicShowController::class, 'index'])->name('topic.index');
Route::get('/topics/{topic}', [TopicShowController::class, 'show'])->name('topic.show');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
use App\Http\Controllers\BlogController;

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');


use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ContactController;
use App\Models\Message;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

Route::get('/admin', function () {
    return view('admin', ['messages' => Message::latest()->get()]);
})->name('admin');

// Backwards-compatible dashboard route used by some admin templates
Route::get('/dashboard', function () {
    return view('admin', ['messages' => Message::latest()->get()]);
})->name('dashboard');

// Admin resource routes with 'admin.' prefix
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('topic', TopicController::class);
    Route::resource('video', VideoController::class);
    // Admin orders listing
    Route::get('orders', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('orders');
    // Admin actor (customers) listing
    Route::get('actor', [App\Http\Controllers\Admin\ActorController::class, 'index'])->name('actor');
});
Route::get('/account/info', function () {
    return view('account.info');
})->name('account.info')->middleware('auth');

// Contact form from footer: send email to shop
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Wishlist / Cart / Orders
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/orders', [OrderController::class, 'index'])->name('orders')->middleware('auth');

// Actions
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/wishlist/add', [WishlistController::class, 'add'])->name('wishlist.add');
Route::post('/wishlist/remove/{id}', [WishlistController::class, 'remove'])->name('wishlist.remove');

Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::post('/checkout', [OrderController::class, 'place'])->name('checkout.place');

// Simulated payment gateway routes (demo)
Route::get('/checkout/momo', [OrderController::class, 'momo'])->name('checkout.momo');
Route::get('/checkout/momo/return', [OrderController::class, 'momoReturn'])->name('checkout.momo.return');
Route::get('/checkout/vnpay', [OrderController::class, 'vnpay'])->name('checkout.vnpay');
Route::get('/checkout/vnpay/return', [OrderController::class, 'vnpayReturn'])->name('checkout.vnpay.return');
