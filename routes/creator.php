<?php
use App\Http\Controllers\user\creator\dashboard\DashboardCreatorUserController;
use App\Http\Controllers\user\creator\profile\ProfileCreatorUserController;

Route::get('dashboard', [DashboardCreatorUserController::class, 'dashboard'])->name('dashboard');
Route::get('register', [DashboardCreatorUserController::class, 'ShowRegister'])->name('register');
Route::post('register', [DashboardCreatorUserController::class, 'register'])->name('register');

Route::get('profile', [ProfileCreatorUserController::class, 'showProfile'])->name('profile');
Route::post('profile', [ProfileCreatorUserController::class, 'profile'])->name('profile');
Route::get('change-password', [ProfileCreatorUserController::class, 'showChangePassword'])->name('change.password');
Route::post('change-password', [ProfileCreatorUserController::class, 'changePassword'])->name('change.password');
