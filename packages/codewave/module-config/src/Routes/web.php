<?php
use Illuminate\Support\Facades\Route;
use CodeWavePos\Config\Http\Controllers\BackendController;
use CodeWavePos\Config\Http\Controllers\PageController;
// dd(config('backend.backend_prefix', 'admin'));

Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');

Route::group(config('config.backend_prefix', 'admin'), function () {
    // Route::get(config('config.login_uri', 'login'), [BackendController::class, 'loginForm'])->name('auth.login');
});