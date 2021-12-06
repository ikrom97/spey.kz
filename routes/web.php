<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Localization route
Route::get('/localization', [MainController::class, 'setLocale'])->name('localization');
// Pages' routes
Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/products', [PagesController::class, 'products'])->name('products');
Route::get('/products/{id}', [PagesController::class, 'productsRead'])->name('products.read');
Route::get('/news', [PagesController::class, 'news'])->name('news');
Route::get('/news/read/{id}', [PagesController::class, 'newsRead'])->name('news.read');
Route::get('/contacts', [PagesController::class, 'contacts'])->name('contacts');
// Products' routes
Route::post('/products/search', [ProductsController::class, 'search'])->name('products.search');
Route::get('/products/download/instructions', [ProductsController::class, 'downloadInstructions'])->name('products.download.instructions');
// Auth routes
Route::post('/auth/check', [AuthController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::group(['middleware' => ['AuthCheck']], function () {
    Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');

    Route::group(['middleware' => ['AdminCheck']], function () {
        // dashboard pages
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });
});