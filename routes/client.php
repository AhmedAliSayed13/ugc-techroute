<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\client\dashboard\DashboardClientUserController;
use App\Http\Controllers\user\client\profile\ProfileClientUserController;
use App\Http\Controllers\user\client\search\SearchClientUserController;
use App\Http\Controllers\user\client\order\OrderClientUserController;

Route::get('dashboard', [DashboardClientUserController::class, 'dashboard'])->name('dashboard');
Route::get('register', [DashboardClientUserController::class, 'ShowRegister'])->name('register')->withoutMiddleware('ClientAuth');
Route::post('register', [DashboardClientUserController::class, 'register'])->name('register')->withoutMiddleware('ClientAuth');

Route::get('profile', [ProfileClientUserController::class, 'showProfile'])->name('profile');
Route::post('profile', [ProfileClientUserController::class, 'profile'])->name('profile');
Route::get('change-password', [ProfileClientUserController::class, 'showChangePassword'])->name('change.password');
Route::get('search/creators', [SearchClientUserController::class, 'searchCreators'])->name('search.creators');


Route::prefix('order')->name('order.')->group(function () {
    Route::get('details', [OrderClientUserController::class, 'showDetails'])->name('details');
    Route::post('details', [OrderClientUserController::class, 'details'])->name('details');

});
