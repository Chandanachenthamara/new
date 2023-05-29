<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/admin', 'admin/login');

// Auth::routes();

Route::group(['prefix' => 'admin'], function() {
    Route::auth(['register'=>false]);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('frontend-home');

Route::get('/details/{id?}', [App\Http\Controllers\FrontendController::class, 'details'])->name('frontend-details');

Route::get('/existinguser', [App\Http\Controllers\FrontendController::class, 'existinguser'])->name('frontend-existinguser');

Route::get('/thankyou', [App\Http\Controllers\FrontendController::class, 'thankyou'])->name('frontend-thankyou');

Route::get('/verification', [App\Http\Controllers\FrontendController::class, 'verification'])->name('frontend-verification');

Route::get('/otp-verification-submit', [App\Http\Controllers\FrontendController::class, 'otp_verification_submit'])->name('frontend-otp-verification-submit');

Route::get('/otp-verification/{id?}', [App\Http\Controllers\FrontendController::class, 'otp_verification'])->name('frontend-otp-verification');



Route::post('/visitor-registration', [App\Http\Controllers\FrontendController::class, 'visitor_registration'])->name('frontend-visitor-registration');

Route::post('/frontend-visitor-payment-reg', [App\Http\Controllers\FrontendController::class, 'frontend_visitor_payment_reg'])->name('frontend-visitor-payment-reg');


Route::post('/frontend-visitor-payment-reg-existing', [App\Http\Controllers\FrontendController::class, 'frontend_visitor_payment_reg_existing'])->name('frontend-visitor-payment-reg-existing');


Route::post('/existing-users-verification', [App\Http\Controllers\FrontendController::class, 'existing_users_verification'])->name('existing-users-verification');

Route::post('/users-otp-verification', [App\Http\Controllers\FrontendController::class, 'users_otp_verification'])->name('users-otp-verification');



Route::get('/token-list/{cus_id?}', [App\Http\Controllers\FrontendController::class, 'token_list'])->name('token-list');



Route::group(['middleware' => ['auth']], function () { 
    

    Route::get('/customers', 
        [App\Http\Controllers\HomeController::class, 'customers']
    )->name('customers');

      Route::get('/purchase', 
        [App\Http\Controllers\HomeController::class, 'purchase']
    )->name('purchase');

    Route::get('/tokens', 
        [App\Http\Controllers\HomeController::class, 'tokens']
    )->name('tokens');

    Route::get('/customers-view/{id?}', 
        [App\Http\Controllers\HomeController::class, 'customers_view']
    )->name('customers_view');

    Route::get('/purchase-view/{id?}', 
        [App\Http\Controllers\HomeController::class, 'purchase_view']
    )->name('purchase_view');

    Route::get('/payment-view/{id?}', 
        [App\Http\Controllers\HomeController::class, 'payment_view']
    )->name('payment_view');


    


});

 Route::get('/route-cache', function() {
     $exitCode = Artisan::call('route:cache');
     return 'Routes cache cleared';
 });

  Route::get('/config-cache', function() {
     $exitCode = Artisan::call('config:cache');
     return 'Config cache cleared';
 });

   Route::get('/clear-cache', function() {
     $exitCode = Artisan::call('cache:clear');
     return 'Application cache cleared';
 });

 Route::get('/view-clear', function() {
     $exitCode = Artisan::call('view:clear');
     return 'View cache cleared';
 });