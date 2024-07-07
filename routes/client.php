<?php
use App\Http\Controllers\user\client\dashboard\DashboardClientUserController;
use App\Http\Controllers\user\client\myorder\MyOrderClientUserController;
use App\Http\Controllers\user\client\order\OrderClientUserController;
use App\Http\Controllers\user\client\profile\ProfileClientUserController;
use App\Http\Controllers\user\client\search\SearchClientUserController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [DashboardClientUserController::class, 'dashboard'])->name('dashboard');
Route::get('register', [DashboardClientUserController::class, 'ShowRegister'])->name('register')->withoutMiddleware(['ClientAuth', 'CheckUserAccountActive']);
Route::post('register', [DashboardClientUserController::class, 'register'])->name('register')->withoutMiddleware(['ClientAuth', 'CheckUserAccountActive']);

Route::get('profile', [ProfileClientUserController::class, 'showProfile'])->name('profile');
Route::post('profile', [ProfileClientUserController::class, 'profile'])->name('profile');
Route::get('change-password', [ProfileClientUserController::class, 'showChangePassword'])->name('change.password');
Route::get('search/creators', [SearchClientUserController::class, 'searchCreators'])->name('search.creators');

Route::prefix('order')->name('order.')->group(function () {
    Route::get('details', [OrderClientUserController::class, 'showDetails'])->name('details');
    Route::post('details', [OrderClientUserController::class, 'details'])->name('details');
    Route::get('checkout/{key}', [OrderClientUserController::class, 'showCheckout'])->name('checkout');
    Route::post('checkout/{key}', [OrderClientUserController::class, 'checkout'])->name('checkout');
    Route::post('calculation/price', [OrderClientUserController::class, 'calculationPrice'])->name('calculation.price');
    Route::get('product/{key}', [OrderClientUserController::class, 'showProduct'])->name('product');
    Route::post('product/{key}', [OrderClientUserController::class, 'product'])->name('product');
    Route::get('criteria/{key}', [OrderClientUserController::class, 'showCriteria'])->name('criteria');
    Route::post('criteria/{key}', [OrderClientUserController::class, 'criteria'])->name('criteria');
});

Route::resource('my-orders', MyOrderClientUserController::class)->only([
    'index', 'show', 'edit',
]);

Route::get('my-orders/creators/{id}', [MyOrderClientUserController::class, 'orderCreators'])->name('my-orders.creators');
Route::post('my-orders/choose/creator/{id}', [MyOrderClientUserController::class, 'chooseCreator'])->name('my-orders.choose.creator');
Route::get('my-orders/delivery/{id}', [MyOrderClientUserController::class, 'orderDelivery'])->name('my-orders.delivery');
Route::get('my-orders/delivery/confirm/{id}', [MyOrderClientUserController::class, 'orderDeliveryConfirm'])->name('my-orders.delivery.confirm');
