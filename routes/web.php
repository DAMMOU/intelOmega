<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocaleController;
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

// FRONTEND ROUTES
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});
Route::controller(ContactUsController::class)->group(function () {
    Route::get('/contact-us', 'index')->name('contact-us');
    Route::post('/send-mail', 'contactUs')->name('send-mail');
});

// LOCALE ROUTES
Route::get('/locale/{lang}', [LocaleController::class, 'language'])->name('locale');


// ADMIN ROUTES

    // ADMIN DASHBOARD ROUTES
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');



  