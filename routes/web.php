<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::prefix('category')->group(function () {
    Route::get('/{category}', [ProductsController::class, 'category'])->name('category');
});
Route::get('/sales', [SalesController::class, 'index'])->name('sales');

Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);



