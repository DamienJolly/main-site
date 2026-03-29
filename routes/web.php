<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::view('/', 'home')->name('home');
Route::view('/services', 'services')->name('services');
Route::view('/services/house-cleaning', 'services.house-cleaning')->name('services.house-cleaning');
Route::view('/services/commercial-cleaning', 'services.commercial-cleaning')->name('services.commercial-cleaning');
Route::view('/services/one-off-cleans', 'services.one-off-cleans')->name('services.one-off-cleans');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::view('/about', 'about')->name('about');

Route::get('/sitemap.xml', function () {
    return response()->view('sitemap')->header('Content-Type', 'application/xml');
})->name('sitemap');
