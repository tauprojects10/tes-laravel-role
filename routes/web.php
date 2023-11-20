<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['verify'=>true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
    Route::get('', 'index')->name('kategori');
    Route::get('create', 'create')->name('kategori.create');
    Route::post('store', 'store')->name('kategori.store');
    Route::get('edit/{id}', 'edit')->name('kategori.edit');
    Route::put('edit/{id}', 'update')->name('kategori.update');
    Route::delete('destroy/{id}', 'destroy')->name('kategori.destroy');
});

Route::get('/', function () {
    return view('user.pages.index');
})->name('home');
Route::get('shop', function () {
    return view('user.pages.shop');
})->name('shop');
Route::get('shop-details', function () {
    return view('user.pages.shop-details');
})->name('shop-details');
Route::get('/cart', function () {
    return view('user.pages.shoping-cart');
})->name('cart');