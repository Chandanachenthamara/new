<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\EmployeeController;

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



// Auth::routes();

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', [App\Http\Controllers\Admin\AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [App\Http\Controllers\Admin\AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
     Route::post('/logout', [App\Http\Controllers\Admin\AdminAuthController::class, 'adminLogout'])->name('logout');

    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', function () {
            return view('welcome1');
        })->name('adminDashboard');

    });
    Route::get('/contactview', [App\Http\Controllers\ContactController::class, 'contacts'])->name('contactview');

    Route::get('/banners_list', [App\Http\Controllers\BannerController::class, 'index'])->name('banners');
     Route::get('/banners_create', [App\Http\Controllers\BannerController::class, 'create'])->name('banners-create');
      Route::post('/banners_create', [App\Http\Controllers\BannerController::class, 'store'])->name('banners-store');
       Route::get('/banners_edit/{id?}', [App\Http\Controllers\BannerController::class, 'edit'])->name('banners-edit');
        Route::post('/banners_edit', [App\Http\Controllers\BannerController::class, 'update'])->name('banners-update');
         Route::get('/banners_show/{id?}', [App\Http\Controllers\BannerController::class, 'show'])->name('banners-show');
          Route::get('/banners_delete/{id?}', [App\Http\Controllers\BannerController::class, 'destroy'])->name('banners-delete');

          Route::get('/homecontents_list', [App\Http\Controllers\ContentManageController::class, 'index'])->name('homecontents');
     Route::get('/homecontents_create', [App\Http\Controllers\ContentManageController::class, 'create'])->name('homecontents-create');
      Route::post('/homecontents_create', [App\Http\Controllers\ContentManageController::class, 'store'])->name('homecontents-store');
       Route::get('/homecontents_edit/{id?}', [App\Http\Controllers\ContentManageController::class, 'edit'])->name('homecontents-edit');
        Route::post('/homecontents_edit', [App\Http\Controllers\ContentManageController::class, 'update'])->name('homecontents-update');
         Route::get('/homecontents_show/{id?}', [App\Http\Controllers\ContentManageController::class, 'show'])->name('homecontents-show');
          Route::get('/homecontents_delete/{id?}', [App\Http\Controllers\ContentManageController::class, 'destroy'])->name('homecontents-delete');

          Route::get('/hotels_list', [App\Http\Controllers\ContentManageController::class, 'hotel_index'])->name('hotels');
     Route::get('/hotels_create', [App\Http\Controllers\ContentManageController::class, 'hotel_create'])->name('hotels-create');
      Route::post('/hotels_create', [App\Http\Controllers\ContentManageController::class, 'hotel_store'])->name('hotels-store');
       Route::get('/hotels_edit/{id?}', [App\Http\Controllers\ContentManageController::class, 'hotel_edit'])->name('hotels-edit');
        Route::post('/hotels_edit', [App\Http\Controllers\ContentManageController::class, 'hotel_update'])->name('hotels-update');
         Route::get('/hotels_show/{id?}', [App\Http\Controllers\ContentManageController::class, 'hotel_show'])->name('hotels-show');
          Route::get('/hotels_delete/{id?}', [App\Http\Controllers\ContentManageController::class, 'hotel_destroy'])->name('hotels-delete');

     //Route::resource('banners', BannerController::class)->name('*','banners');
});



Route::get('/', [App\Http\Controllers\FrontendController::class, 'home'])->name('frontend-home');
Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('frontend-about');
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('frontend-contact');
Route::get('/services', [App\Http\Controllers\FrontendController::class, 'services'])->name('frontend-services');
Route::get('/hotel', [App\Http\Controllers\FrontendController::class, 'hotel'])->name('frontend-hotel');
Route::get('/faq', [App\Http\Controllers\FrontendController::class, 'faq'])->name('frontend-faq');
Route::get('/example', [App\Http\Controllers\FrontendController::class, 'example'])->name('frontend-example');

Route::get('/register', [App\Http\Controllers\FrontendController::class, 'register'])->name('frontend-register');

Route::post('/contactlist,postpost', [App\Http\Controllers\ContactController::class, 'store'])->name('contactlist');

Route::get('/customer/store', [App\Http\Controllers\FrontendController::class, 'registerstore'])->name('customer.store');

Route::get('/index/aboutindex', [App\Http\Controllers\Auth\CustomerLoginController::class, 'index'])->name('index.aboutindex');



// Route::get('login', 'Auth\CustomerLoginController@showLoginForm')->name('auth-login');


 Route::get('/login', [App\Http\Controllers\Auth\CustomerLoginController::class, 'showLoginForm'])->name('auth-login');

 Route::post('frontend/login', [App\Http\Controllers\Auth\CustomerLoginController::class, 'handleLogin'])->name('frontend.login.submit');


Route::resource('employees', EmployeeController::class);
// Route::get('/image', [ImageController::class,'index'])->name('image.index');
// Route::post('/image', [ImageController::class,'store'])->name('image.store');


// Route::post('frontend/login', 'Auth\CustomerLoginController@handleLogin')->name('frontend.login.submit');


Route::get('/employee_list', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employees');

     Route::get('/employee_create', [App\Http\Controllers\EmployeeController::class, 'create'])->name('employee-create');
      Route::post('/employee_create', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee-store');
       Route::get('/employee_edit/{id?}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee-edit');
        Route::post('/employee_edit', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employee-update');
         Route::get('/employee_show/{id?}', [App\Http\Controllers\EmployeeController::class, 'show'])->name('employee-show');
          Route::get('/employee_delete/{id?}', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employee-delete');
Route::post('/employee_update/{id?}', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employee-update');

// Route::put('/employees/{id}', 'EmployeeController@update')->name('employees.update');





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








