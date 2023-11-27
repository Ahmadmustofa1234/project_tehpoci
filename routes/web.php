<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;

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

// Route::get('/', function () {
//     return view('main');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/order', [OrderController::class, 'index'])->name('order');
// Route::get('/order/details', [OrderController::class, 'orderDetails'])->name('orderDetails');

Route::post('/order/details', [OrderController::class, 'orderDetails'])->name('orderDetails');
Route::get('/order/checkout', [OrderController::class, 'payment'])->name('payment');
Route::get('/order/invoice/{id}', [OrderController::class, 'invoice'])->name('invoice');
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('layouts.pages.profile');
// });


// Route::get('/', function () {
//     return view('layouts.pages.manajemen');
// });

// Route::get('/', function () {
//     return view('Admin\partials\layouts\main');
// });

Route::get('/master', function () {
    return view('layouts.master');
});

// Route::get('/manajemen', function () {
//     return view('Admin\partials\layouts\main');
// });

//halaman dashboard
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

//halaman manajemen
Route::get('/manajemen', [App\Http\Controllers\ManajemenController::class, 'index'])->name('manajemen.index');

//halaman pelanggan
Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index'])->name('pelanggan.index');

//halaman pemesanan
Route::get('/pemesanan', [App\Http\Controllers\PemesananController::class, 'index'])->name('pemesanan.index');

//halaman laporan
Route::get('/laporan', [App\Http\Controllers\LaporanController::class, 'index'])->name('laporan.index');

//halaman promo
Route::get('/promo', [App\Http\Controllers\PromoController::class, 'index'])->name('promo.index');
