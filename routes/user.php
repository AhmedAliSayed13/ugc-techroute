<?php
use App\Http\Controllers\user\auth\AuthUserController;

Route::get('login', [AuthUserController::class, 'ShowLogin'])->name('login')->Middleware('RedirectIfAuthenticated')->withoutMiddleware('UserAuth');
Route::post('login', [AuthUserController::class, 'login'])->name('login')->withoutMiddleware('UserAuth');
Route::get('logout', [AuthUserController::class, 'logout'])->name('logout');
Route::get('verify', [AuthUserController::class, 'verify'])->name('verify')->withoutMiddleware('UserAuth');
Route::get('verify-email/{token}', [AuthUserController::class, 'verifyEmail'])->where('token', '.+')->name('verify.email')->withoutMiddleware('UserAuth');
