<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/services', 'services')->name('services');
Route::view('/services/house-cleaning', 'services.house-cleaning')->name('services.house-cleaning');
Route::view('/services/commercial-cleaning', 'services.commercial-cleaning')->name('services.commercial-cleaning');
Route::view('/services/one-off-cleans', 'services.one-off-cleans')->name('services.one-off-cleans');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');