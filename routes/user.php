<?php
use App\Http\Controllers\user\auth\AuthUserController;

Route::get('login', [AuthUserController::class, 'ShowLogin'])->name('login')->withoutMiddleware('UserAuth');
Route::post('login', [AuthUserController::class, 'login'])->name('login')->withoutMiddleware('UserAuth');
Route::get('logout', [AuthUserController::class, 'logout'])->name('logout');


