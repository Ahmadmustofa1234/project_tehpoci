<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [AuthController::class, 'index'])->name('auth.index');
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/create',[AuthController::class, 'create'])->name('create');
    Route::post('/auth', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/ResetPass', [AuthController::class, 'ResetPass'])->name('auth.ResetPass');
    Route::get('/verify/{verify_key}', [AuthController::class, 'verify']);
   
    // 
    
    Route::get('/auth/redirect', [LoginController::class, 'redirectToProvider'])->name("auth.redirect");
    Route::get('/auth/callback', [LoginController::class, 'handleProviderCallback'])->name("auth.callback");


    // Rute Lupa Password
    Route::get('/forgot', [AuthController::class, 'forgot'])->name('auth.forgot');
    Route::post('/sendResetLinkEmail', [AuthController::class, 'sendResetLinkEmail'])->name('auth.password');
    Route::get('/reset/{token}', [AuthController::class, 'Reset'])->name('reset');
    Route::post('/reset/{token}', [AuthController::class, 'resetPassword'])->name('reset');
    
    // 
    // 
    
    // 
});



  


