<?php
use App\Http\Controllers\user\auth\AuthUserController;


Route::get('login', [AuthUserController::class, 'ShowLogin'])->name('login');
Route::post('login', [AuthUserController::class, 'login'])->name('login.user');
Route::post('logout', [AuthUserController::class, 'logout'])->name('logout');

