<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/shop', 'shop')->name('shop');
Route::view('/restaurants', 'shop')->name('restaurants');
Route::view('/services', 'services')->name('services');
Route::view('/login', 'auth', ['mode' => 'login'])->name('login');
Route::view('/register', 'auth', ['mode' => 'register'])->name('register');
