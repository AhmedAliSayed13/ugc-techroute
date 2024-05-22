<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmirateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\Marketing\CategoryController;
use App\Http\Controllers\Marketing\MarketingServiceTypeController;
use App\Http\Controllers\Marketing\AdController;
use App\Http\Controllers\Marketing\ContractTypeController;
use App\Http\Controllers\Marketing\ContractController;
use App\Http\Controllers\Marketing\AjaxController;
use App\Http\Controllers\Platform\PlatformController;
use App\Http\Controllers\Options\SurveyController;
use App\Http\Controllers\Options\PagesController;


use App\Http\Controllers\Service\ServiceController;

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

//  Route::group(['prefix'=>'options'], function(){
//     Route::resource('visitors', VisitorController::class);
// });
// Auth::routes(['register' => false]);


// Route::get('test', [TestController::class, 'test']);
// Route::get('customer/{key}', [CustomerController::class, 'customerDisplay'])->name('customer.display');

// Route::group(['middleware' => 'auth'], function () {

//     Route::get('/', [HomeController::class, 'index'])->name('home');
//     Route::get('setting', [HomeController::class, 'setting'])->name('setting');
//     Route::post('setting', [HomeController::class, 'settingSave'])->name('setting.save');
//     Route::get('change/password', [HomeController::class, 'changePassword'])->name('change.password');
//     Route::post('change/password', [HomeController::class, 'changePasswordSave'])->name('change.password.save');

//     Route::get('/media/delete/{media}', [CustomerController::class, 'mediaDelete'])->name('media.delete');
//     Route::resource('services', ServiceController::class);
//     Route::resource('roles', RoleController::class);
//     Route::resource('users', UserController::class);
//     Route::resource('emirates', EmirateController::class);

//     Route::group(['prefix'=>'marketing'], function(){
//         // Route::resource('service-types', MarketingServiceTypeController::class);
//         Route::resource('ads', AdController::class);
//         Route::resource('categories', CategoryController::class);
//         // Route::resource('contract-types', ContractTypeController::class);
//         // Route::resource('contracts', ContractController::class);


//         Route::group(['prefix'=>'ajax'], function(){

//             Route::get('order/{customer_id}', [AjaxController::class, 'getOrder'])->name('get-order');
//             Route::get('service/{order_id}', [AjaxController::class, 'getService'])->name('get-service');
//         });

//     });

//     Route::group(['prefix'=>'social'], function(){
//         Route::get('report', [PlatformController::class,'report'])->name('report')->withoutMiddleware('auth');
//         Route::get('report/edit', [PlatformController::class,'reportEdit'])->name('report.edit')->withoutMiddleware('auth');
//         Route::post('report/edit', [PlatformController::class,'reportUpdate'])->name('report.update')->withoutMiddleware('auth');

//     });


//     Route::group(['prefix'=>'options'], function(){
//         Route::resource('surveys', SurveyController::class);
//         Route::get('survey/answer/{key}/{answer}', [SurveyController::class,'storeAnswer'])->name('survey.answer')->withoutMiddleware('auth');
//         Route::post('survey/reason', [SurveyController::class,'storeReason'])->name('survey.reason')->withoutMiddleware('auth');
//     });

// });



// Route::group(['prefix'=>'pages','name'=>'pages.'], function(){
//     Route::get('policy', [PagesController::class,'policy'])->name('policy');

// });





//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});
//Clear Cache facade value:
Route::get('/clear-config', function() {
    $exitCode = Artisan::call('config:clear');
    return '<h1>config facade value cleared</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});



