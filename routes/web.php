<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
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

// ...

// Grup route untuk pengunjung (guest)
Route::group(['middleware' => 'guest'], function () {

    // Rute untuk tampilan login
    Route::get('/login', [AuthController::class, 'index'])->name('auth.index');

    // Rute untuk tampilan registrasi
    Route::get('/register', [AuthController::class, 'register'])->name('register');

    // Rute untuk proses registrasi
    Route::post('/create', [AuthController::class, 'create'])->name('create');

    // Rute untuk proses login
    Route::post('/auth', [AuthController::class, 'login'])->name('auth.login');

    // Rute untuk proses logout
    Route::match(['get', 'post'], '/logout', [AuthController::class, 'logout'])->name('logout');

    // Rute untuk tampilan utama (mungkin Anda ingin memindahkan ini ke luar grup)
    Route::get('/', [AuthController::class, 'index'])->name('auth.index');

    // Grup route untuk sub-rute yang memerlukan middleware 'guest'
    Route::group(['middleware' => 'guest'], function () {

        // Rute untuk tampilan registrasi
        Route::get('/register', [AuthController::class, 'register'])->name('register');

        // Rute untuk proses registrasi
        Route::post('/create', [AuthController::class, 'create'])->name('create');

        // Rute untuk proses login
        Route::post('/auth', [AuthController::class, 'login'])->name('auth.login');

        // Rute untuk reset password
        Route::post('/ResetPass', [AuthController::class, 'ResetPass'])->name('auth.ResetPass');

        // Rute untuk verifikasi email
        Route::get('/verify/{verify_key}', [AuthController::class, 'verify']);

        // Rute untuk autentikasi pihak ketiga
        Route::get('/auth/redirect', [LoginController::class, 'redirectToProvider'])->name('auth.redirect');
        Route::get('/auth/callback', [LoginController::class, 'handleProviderCallback'])->name('auth.callback');

        // Rute untuk lupa password
        Route::get('/forgot', [AuthController::class, 'forgot'])->name('auth.forgot');
        Route::post('/sendResetLinkEmail', [AuthController::class, 'sendResetLinkEmail'])->name('auth.password');
        Route::get('/reset/{token}', [AuthController::class, 'Reset'])->name('reset');
        Route::post('/reset/{token}', [AuthController::class, 'resetPassword'])->name('reset');
    });

    // ...

});

// ...




  
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

Route::get('/login', function () {
    return view('auth.login');
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

// //fungsi add produk
// Route::post('/addProduk', [App\Http\Controllers\ManajemenController::class, 'addProduct']);

// //halaman add produk
// Route::get('/viewProduk', [App\Http\Controllers\ManajemenController::class, 'viewProduct']);

//fungsi add produk
Route::match(['get', 'post'], '/addProduk', [App\Http\Controllers\ManajemenController::class, 'addProduct']);

//halaman add produk
Route::get('/viewProduk', [App\Http\Controllers\ManajemenController::class, 'viewProduct']);

//hapus produk
Route::get('/delete_product/{id}', [App\Http\Controllers\ManajemenController::class, 'delete_product']);

//halaman katalog
Route::get('/daftarProduk', [App\Http\Controllers\KatalogController::class, 'index']);

//halaman add katalog
// Route::post('/add_katalog', [App\Http\Controllers\KatalogController::class, 'index']);
Route::match(['get', 'post'], '/add_katalog', [App\Http\Controllers\KatalogController::class, 'add_katalog']);



Route::get('/get_product_info/{id}', [App\Http\Controllers\ManajemenController::class, 'getProductInfo']);

Route::get('/delete_product/{id}', [App\Http\Controllers\KatalogController::class, 'delete_product']);
