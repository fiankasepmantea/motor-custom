<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::prefix('admin')->group(function () {
    Route::resource('products', ProductController::class);
});
Route::get('/products/search', [HomeController::class, 'search']);
