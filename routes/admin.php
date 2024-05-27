<?php
use App\Http\Controllers\admin\auth\AuthAdminController;
use App\Http\Controllers\admin\dashboard\DashboardAdminController;
use App\Http\Controllers\admin\role\RoleAdminController;
use App\Http\Controllers\admin\user\UserAdminController;

Route::get('login', [AuthAdminController::class, 'ShowLogin'])->name('login');
Route::post('login', [AuthAdminController::class, 'login']);
Route::post('logout', [AuthAdminController::class, 'logout'])->name('logout');

Route::get('dashboard', [DashboardAdminController::class, 'ShowDashboard'])->name('dashboard');
Route::resource('roles', RoleAdminController::class);
Route::resource('users', UserAdminController::class);

Route::get('users/creator/create', [UserAdminController::class, 'creatorCreate'])->name('users.creator.create');
Route::post('users/creator/create', [UserAdminController::class, 'creatorStore'])->name('users.creator.create');

Route::get('users/creator/{id}/edit', [UserAdminController::class, 'creatorEdit'])->name('users.creator.edit');
Route::post('users/creator/{id}/update', [UserAdminController::class, 'creatorUpdate'])->name('users.creator.update');

Route::get('users/client/create', [UserAdminController::class, 'clientCreate'])->name('users.client.create');
Route::post('users/client/create', [UserAdminController::class, 'clientStore'])->name('users.client.create');

Route::get('users/client/{id}/edit', [UserAdminController::class, 'clientEdit'])->name('users.client.edit');
Route::post('users/client/{id}/update', [UserAdminController::class, 'clientUpdate'])->name('users.client.update');
