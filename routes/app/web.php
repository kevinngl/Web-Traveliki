<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\HomeController;

Route::get('signin',[AuthController::class, 'index'])->name('signin');
Route::get('signup',[AuthController::class, 'register'])->name('signup');
Route::get('login',[AuthController::class, 'do_login'])->name('login');
Route::get('home',[HomeController::class, 'index'])->name('home');
Route::get('pesawat',[HomeController::class, 'pesawat'])->name('pesawat');
Route::get('destinasi',[HomeController::class, 'destinasi'])->name('destinasi');
Route::get('hotel',[HomeController::class, 'hotel'])->name('hotel');
Route::get('tiket',[HomeController::class, 'tiket'])->name('tiket');
Route::get('detail',[HomeController::class, 'detail'])->name('detail');
Route::get('order',[HomeController::class, 'order'])->name('order');
