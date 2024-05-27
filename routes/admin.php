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

Route::get('users/creator/create',[UserAdminController::class,'creatorCreate'])->name('users.creator.create');
Route::post('users/creator/create',[UserAdminController::class,'creatorStore'])->name('users.creator.create');

Route::get('users/client/create',[UserAdminController::class,'clientCreate']);
Route::post('users/client/create',[UserAdminController::class,'clientStore']);


