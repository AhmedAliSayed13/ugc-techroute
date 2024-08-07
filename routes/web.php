<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\website\pages\PagesController;
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

Route::get('/test', [TestController::class, 'test'])->name('comingSoon');
Route::get('/', [PagesController::class, 'comingSoon'])->name('comingSoon');
Route::post('/', [PagesController::class, 'comingSoonSave'])->name('comingSoon.save');
Route::get('/home', [PagesController::class, 'homePage'])->name('home');
Route::get('/price', [PagesController::class, 'price'])->name('price');
Route::get('/agencies', [PagesController::class, 'agencies'])->name('agencies');
Route::get('/ecommerce', [PagesController::class, 'ecommerce'])->name('ecommerce');
Route::get('/page', [PagesController::class, 'page'])->name('page');

// Route::get('/chat/{task_id}', function ($task_id) {
//     return view('chats.index', ['task_id' => $task_id]);
// });

// Route::post('/send-message', [ChatController::class, 'sendMessage']);

Route::get('/chats/{task_id}', [ChatController::class, 'show'] )->name('chats.show');
Route::post('/chats/{task_id}/messages', [ChatController::class, 'storeMessage'])->name('messages.store');

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});
//Clear Cache facade value:
Route::get('/clear-config', function () {
    $exitCode = Artisan::call('config:clear');
    return '<h1>config facade value cleared</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function () {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});
