<?php
use Illuminate\Support\Facades\Route;
use CodeWavePos\Config\Http\Controllers\BackendController;
use CodeWavePos\Config\Http\Controllers\PageController;
// dd(config('backend.backend_prefix', 'admin'));

Route::group(['prefix' => 'pos'], function() {
    Route::get('/home', [PageController::class, 'home'])->name('pos.home');
    Route::get('/settings', [PageController::class, 'settings'])->name('pos.settings');
});

Route::group(config('config.backend_prefix', 'admin'), function () {
    // Route::get(config('config.login_uri', 'login'), [BackendController::class, 'loginForm'])->name('auth.login');
});