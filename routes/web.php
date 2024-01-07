<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\User\Template\TemplateController;
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

Route::get('welcome', function(){
    return view('welcome');
});
// AUTH ROUTES
Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
    require __DIR__.'/auth.php';
});

// FRONTEND ROUTES
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/blog/{slug}', 'blogShow')->name('blogs.show');
    Route::get('/terms-and-conditions', 'termsAndConditions')->name('terms');
    Route::get('/privacy-policy', 'privacyPolicy')->name('privacy');
});

Route::controller(ContactUsController::class)->group(function () {
    Route::get('/contact-us', 'index')->name('contact-us');
    Route::post('/send-mail', 'contactUs')->name('send-mail');
});

// LOCALE ROUTES
Route::get('/locale/{lang}', [LocaleController::class, 'language'])->name('locale');


// ADMIN ROUTES
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin', 'PreventBackHistory']], function() {

    // ADMIN DASHBOARD ROUTES
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

});

// REGISTERED USER ROUTES
Route::group(['prefix' => 'user', 'middleware' => ['role:user|admin|subscriber', 'PreventBackHistory']], function() {

    
    
    // USER TEMPLATE ROUTES
    Route::controller(TemplateController::class)->group(function () {
        Route::get('/templates', 'index')->name('user.templates');       
        
    });

  
 
 
  


 

});

  