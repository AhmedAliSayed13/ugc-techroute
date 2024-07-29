<?php
use App\Http\Controllers\admin\auth\AuthAdminController;
use App\Http\Controllers\admin\dashboard\DashboardAdminController;
use App\Http\Controllers\admin\mainOption\MainOptionAdminController;
use App\Http\Controllers\admin\role\RoleAdminController;
use App\Http\Controllers\admin\user\UserAdminController;
use App\Http\Controllers\admin\valueOption\ValueOptionAdminController;
use App\Http\Controllers\admin\order\OrderAdminController;
use App\Http\Controllers\admin\transaction\TransactionAdminController;

Route::get('login', [AuthAdminController::class, 'ShowLogin'])->name('login')->withoutMiddleware('AdminAuth');
Route::post('login', [AuthAdminController::class, 'login'])->name('login')->withoutMiddleware('AdminAuth');
Route::post('logout', [AuthAdminController::class, 'logout'])->name('logout');

Route::get('dashboard', [DashboardAdminController::class, 'ShowDashboard'])->name('dashboard');
Route::resource('roles', RoleAdminController::class);
Route::resource('users', UserAdminController::class);
Route::resource('orders', OrderAdminController::class)->only([
    'index', 'show','edit','update'
]);
Route::resource('transactions', TransactionAdminController::class)->only([
    'index', 'show','edit','update'
]);
Route::post('orders/confirm/{id}', [OrderAdminController::class, 'orderConfirm'])->name('orders.confirm');
Route::resource('main-options', MainOptionAdminController::class);
// Route::resource('value-options',ValueOptionAdminController::class);
Route::group(['prefix' => 'value-options', 'as' => 'value-options.'], function () {
    Route::get('show/{id}', [ValueOptionAdminController::class, 'show'])->name('show');
    Route::get('index/{id}', [ValueOptionAdminController::class, 'index'])->name('index');
    Route::get('create/{id}', [ValueOptionAdminController::class, 'create'])->name('create');
    Route::post('store/{id}', [ValueOptionAdminController::class, 'store'])->name('store');
    Route::get('edit/{id}', [ValueOptionAdminController::class, 'edit'])->name('edit');
    Route::PATCH('update/{id}', [ValueOptionAdminController::class, 'update'])->name('update');
    Route::delete('destroy/{id}', [ValueOptionAdminController::class, 'destroy'])->name('destroy');

    // Route::get('connect', 'AccountController@connect')->name('connect');
});

Route::get('users/creator/create', [UserAdminController::class, 'creatorCreate'])->name('users.creator.create');
Route::post('users/creator/create', [UserAdminController::class, 'creatorStore'])->name('users.creator.create');

Route::get('users/creator/{id}/edit', [UserAdminController::class, 'creatorEdit'])->name('users.creator.edit');
Route::post('users/creator/{id}/update', [UserAdminController::class, 'creatorUpdate'])->name('users.creator.update');

Route::get('users/client/create', [UserAdminController::class, 'clientCreate'])->name('users.client.create');
Route::post('users/client/create', [UserAdminController::class, 'clientStore'])->name('users.client.create');

Route::get('users/client/{id}/edit', [UserAdminController::class, 'clientEdit'])->name('users.client.edit');
Route::post('users/client/{id}/update', [UserAdminController::class, 'clientUpdate'])->name('users.client.update');
