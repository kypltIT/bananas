<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\GoogleController;

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Home route (default)
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Shop page route
Route::get('/shop-default', function () {
    return view('pages.shop-default');
})->name('shop.default');

// Shop Sale Off page route
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

// Example: FAQ page
Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

// Example: Contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Example: View Cart page
Route::get('/view-cart', function () {
    return view('pages.view-cart');
})->name('view.cart');

// Example: Checkout page
Route::get('/checkout', function () {
    return view('pages.checkout');
})->name('checkout');

// Example: Checkout page
Route::get('/404', function () {
    return view('pages.404');
})->name('404');

// Example: Checkout page
Route::get('/coming-soon', function () {
    return view('pages.coming-soon');
})->name('coming.soon');

// Example: Checkout page
Route::get('/our-store', function () {
    return view('pages.our-store');
})->name('our.store');

// Example: Checkout page
Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy.policy');

// Example: Checkout page
Route::get('/delivery-return', function () {
    return view('pages.delivery-return');
})->name('delivery.return');

// Example: Checkout page
Route::get('/shipping-delivery', function () {
    return view('pages.shipping-delivery');
})->name('shipping.delivery');

// Example: Checkout page
Route::get('/terms-conditions', function () {
    return view('pages.terms-conditions');
})->name('terms.conditions');


// Example: Product details page (Dynamic route with ID)
Route::get('/product/{id}', function ($id) {
    return view('product-details', ['id' => $id]);
})->name('product.details');

// Example: Dashboard route for admins or managers
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

require __DIR__.'/admin.php';
