<?php
use App\Http\Controllers\user\client\dashboard\DashboardClientUserController;
use App\Http\Controllers\user\client\profile\ProfileClientUserController;

Route::get('dashboard', [DashboardClientUserController::class, 'dashboard'])->name('dashboard');
Route::get('register', [DashboardClientUserController::class, 'ShowRegister'])->name('register');
Route::post('register', [DashboardClientUserController::class, 'register'])->name('register');


Route::get('profile', [ProfileClientUserController::class, 'showProfile'])->name('profile');
Route::post('profile', [ProfileClientUserController::class, 'profile'])->name('profile');
