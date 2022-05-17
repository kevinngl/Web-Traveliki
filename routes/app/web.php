<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\OrderController;

Route::get('signin',[AuthController::class, 'index'])->name('signin');
Route::get('signup',[AuthController::class, 'register'])->name('signup');
Route::post('login',[AuthController::class, 'do_login'])->name('login');
Route::get('logout',[AuthController::class, 'do_logout'])->name('logout');
Route::post('register',[AuthController::class, 'do_register'])->name('register');
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('pesawat',[HomeController::class, 'pesawat'])->name('pesawat');
Route::get('destinasi',[HomeController::class, 'destinasi'])->name('destinasi');
Route::get('pesawat',[HomeController::class, 'pesawat'])->name('pesawat');
Route::get('tiket',[HomeController::class, 'tiket'])->name('tiket');
Route::get('detail/{id}',[HomeController::class, 'detail'])->name('detail');
Route::get('detail_order/{id}',[HomeController::class, 'detail_order'])->name('detail_order');
Route::post('order/{id}',[OrderController::class, 'store'])->name('order.store');
