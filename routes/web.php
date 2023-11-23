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
Route::get('/order/details', [OrderController::class, 'orderDetails'])->name('orderDetails');

Route::post('/order/details', [OrderController::class, 'orderDetails'])->name('orderDetails');
Route::get('/order/checkout', [OrderController::class, 'payment'])->name('payment');