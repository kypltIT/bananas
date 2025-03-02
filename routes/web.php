<?php

use Illuminate\Support\Facades\Route;

// Home route (default)
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Shop page route
Route::get('/shop-default', function () {
    return view('pages.shop-default');
})->name('shop.default');

// Shop Sale OffOff page route
Route::get('/shop-sale-off', function () {
    return view('pages.shop-sale-off');
})->name('shop.sale.off');

// Example: About Us page
Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about.us');

// Example: Blog page
Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

// Example: Blog Details page
Route::get('/blog-details', function () {
    return view('pages.blog-details');
})->name('blog.details');

// Example: Contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Example: Product details page (Dynamic route with ID)
Route::get('/product/{id}', function ($id) {
    return view('product-details', ['id' => $id]);
})->name('product.details');

// Example: Dashboard route for admins or managers
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
