<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::prefix('admin')->group(function () {
    Route::resource('products', ProductController::class);
});
Route::get('/products/search', [HomeController::class, 'search']);
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
