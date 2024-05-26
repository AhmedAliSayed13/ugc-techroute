<?php
use App\Http\Controllers\user\client\dashboard\DashboardClientUserController;

Route::get('dashboard', [DashboardClientUserController::class, 'dashboard'])->name('dashboard');
Route::get('register', [DashboardClientUserController::class, 'ShowRegister'])->name('register');
Route::post('register', [DashboardClientUserController::class, 'register'])->name('register');
