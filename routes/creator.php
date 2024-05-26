<?php
use App\Http\Controllers\user\creator\dashboard\DashboardCreatorUserController;

Route::get('dashboard', [DashboardCreatorUserController::class, 'dashboard'])->name('dashboard');
Route::get('register', [DashboardCreatorUserController::class, 'ShowRegister'])->name('register');
Route::post('register', [DashboardCreatorUserController::class, 'register'])->name('register');
