<?php
use App\Http\Controllers\admin\auth\AuthAdminController;
use App\Http\Controllers\admin\dashboard\DashboardAdminController;
use App\Http\Controllers\admin\role\RoleAdminController;

Route::get('login', [AuthAdminController::class, 'ShowLogin'])->name('login');
Route::post('login', [AuthAdminController::class, 'login']);
Route::post('logout', [AuthAdminController::class, 'logout'])->name('logout');

Route::get('dashboard', [DashboardAdminController::class, 'ShowDashboard'])->name('dashboard');
Route::resource('roles', RoleAdminController::class);
