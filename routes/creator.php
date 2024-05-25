<?php
use App\Http\Controllers\user\creator\dashboard\DashboardCreatorUserController;

Route::get('dashboard', [DashboardCreatorUserController::class, 'dashboard'])->name('dashboard');
