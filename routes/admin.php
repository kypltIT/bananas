<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\RevenueController;
use App\Http\Controllers\Admin\SettingsController;

// Group routes under /admin prefix
Route::middleware(['auth', 'checkrole:0865fe87-fd05-11ef-ba53-5811223a0998'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    
    // Product Routes
    Route::get('/products', [ProductsController::class, 'index'])->name('admin.products.index');
    Route::get('/products/create', [ProductsController::class, 'create'])->name('admin.products.create');
    Route::post('/products', [ProductsController::class, 'store'])->name('admin.products.store');
    Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('admin.products.edit');
    Route::put('/products/{id}', [ProductsController::class, 'update'])->name('admin.products.update');
    Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('admin.products.destroy');
    
    // Category Routes
    Route::get('/categories', [CategoriesController::class, 'index'])->name('admin.categories.index');
    Route::get('/categories/create', [CategoriesController::class, 'create'])->name('admin.categories.create');
    Route::post('/categories', [CategoriesController::class, 'store'])->name('admin.categories.store');
    Route::get('/categories/{id}/edit', [CategoriesController::class, 'edit'])->name('admin.categories.edit');
    Route::put('/categories/{id}', [CategoriesController::class, 'update'])->name('admin.categories.update');
    Route::delete('/categories/{id}', [CategoriesController::class, 'destroy'])->name('admin.categories.destroy');

    // Other Routes
    // Route::get('/users', [UsersController::class, 'index'])->name('admin.users');
    // Route::get('/orders', [OrdersController::class, 'index'])->name('admin.orders');
    // Route::get('/revenue', [RevenueController::class, 'index'])->name('admin.revenue');
    // Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings');
});
