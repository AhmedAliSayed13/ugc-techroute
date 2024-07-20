<?php
use App\Http\Controllers\user\auth\AuthUserController;
use App\Http\Controllers\user\forgot_password\ForgotPasswordUserController;

Route::get('login', [AuthUserController::class, 'ShowLogin'])->name('login')->Middleware('RedirectIfAuthenticated')->withoutMiddleware('UserAuth');
Route::post('login', [AuthUserController::class, 'login'])->name('login')->withoutMiddleware('UserAuth');
Route::get('logout', [AuthUserController::class, 'logout'])->name('logout');
Route::get('verify', [AuthUserController::class, 'verify'])->name('verify')->withoutMiddleware('UserAuth');
Route::get('verify-email/{token}', [AuthUserController::class, 'verifyEmail'])->where('token', '.+')->name('verify.email')->withoutMiddleware('UserAuth');
Route::get('register/form/{token}', [AuthUserController::class, 'registerFormCreator'])->where('token', '.+')->name('register.form.creator')->withoutMiddleware('UserAuth');
Route::post('register/form/{token}', [AuthUserController::class, 'registerFormCreatorSave'])->where('token', '.+')->name('register.form.creator')->withoutMiddleware('UserAuth');
Route::get('register/complete', [AuthUserController::class, 'registerComplete'])->name('register.complete')->withoutMiddleware('UserAuth');

Route::get('forget-password', [ForgotPasswordUserController::class, 'showForgetPasswordForm'])->name('forget.password')->withoutMiddleware('UserAuth');
Route::post('forget-password', [ForgotPasswordUserController::class, 'submitForgetPasswordForm'])->name('forget.password')->withoutMiddleware('UserAuth');
Route::get('reset-password/{token}', [ForgotPasswordUserController::class, 'showResetPasswordForm'])->name('reset.password.get')->withoutMiddleware('UserAuth');
Route::post('reset-password', [ForgotPasswordUserController::class, 'submitResetPasswordForm'])->name('reset.password')->withoutMiddleware('UserAuth');
