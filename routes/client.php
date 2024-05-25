<?php
use App\Http\Controllers\user\client\dashboard\DashboardClientUserController;

Route::get('dashboard', [DashboardClientUserController::class, 'dashboard'])->name('dashboard');


