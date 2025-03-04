<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\RevenueController;
use App\Http\Controllers\Admin\SettingsController;

// Group routes under /admin prefix
Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    // Route::get('/users', [UsersController::class, 'index'])->name('admin.users');
    // Route::get('/products', [ProductsController::class, 'index'])->name('admin.products');
    // Route::get('/orders', [OrdersController::class, 'index'])->name('admin.orders');
    // Route::get('/revenue', [RevenueController::class, 'index'])->name('admin.revenue');
    // Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings');
});

