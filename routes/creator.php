<?php
use App\Http\Controllers\user\creator\dashboard\DashboardCreatorUserController;
use App\Http\Controllers\user\creator\offers\OffersCreatorUserController;
use App\Http\Controllers\user\creator\profile\ProfileCreatorUserController;

Route::get('dashboard', [DashboardCreatorUserController::class, 'dashboard'])->name('dashboard');
Route::get('register', [DashboardCreatorUserController::class, 'ShowRegister'])->name('register')->withoutMiddleware(['CreatorAuth','CheckUserAccountActive']);
Route::post('register', [DashboardCreatorUserController::class, 'register'])->name('register')->withoutMiddleware(['CreatorAuth','CheckUserAccountActive']);
Route::get('register/welcome', [DashboardCreatorUserController::class, 'registerWelcome'])->name('register.welcome')->withoutMiddleware(['CreatorAuth','CheckUserAccountActive']);

Route::get('profile', [ProfileCreatorUserController::class, 'showProfile'])->name('profile');
Route::post('profile', [ProfileCreatorUserController::class, 'profile'])->name('profile');

Route::get('change-password', [ProfileCreatorUserController::class, 'showChangePassword'])->name('change.password');
Route::post('change-password', [ProfileCreatorUserController::class, 'changePassword'])->name('change.password');

Route::get('feature-videos', [ProfileCreatorUserController::class, 'showFeatureVideos'])->name('feature.videos');
Route::post('feature-videos', [ProfileCreatorUserController::class, 'featureVideos'])->name('feature.videos');

Route::get('options', [ProfileCreatorUserController::class, 'showOptions'])->name('options');
Route::post('options', [ProfileCreatorUserController::class, 'options'])->name('options');

Route::resource('offers', OffersCreatorUserController::class)->only([
    'index', 'show'
]);
Route::get('offers/request/send/{id}', [OffersCreatorUserController::class, 'requestSend'])->name('offers.request.send');
Route::get('offers/whitelist/{id}', [OffersCreatorUserController::class, 'whitelist'])->name('offers.whitelist');
