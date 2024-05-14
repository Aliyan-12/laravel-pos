<?php
use Illuminate\Support\Facades\Route;
use CodeWave\Backend\Http\Controllers\BackendController;
// dd(config('backend.backend_prefix', 'admin'));
Route::group(config('backend.backend_prefix', 'admin'), function () {
    Route::get(config('backend.login_uri', 'login'), [BackendController::class, 'index'])->name('admin.login');
});