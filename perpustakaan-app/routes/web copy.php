<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin as ADMIN;

Route::get('/', function () {
    return view('welcome');
});

/**
 * Route Salam
 * untuk membuat halaman salam dengan tampilan yang ditentukan
 */
Route::get('/salam', function () {
    return "Assalammualaikum STTNF, Selamat Belajar Laravel 11";
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

// use App\Http\Controllers\Admin as ADMIN;


Route::prefix('/admin')->group(function () {
    Route::get('/', [ADMIN\DashboardController::class, "index"]);
    Route::get('/jabatan', [ADMIN\PositionController::class, 'index'])->name('position.index');
    Route::get('/jabatan/create', [ADMIN\PositionController::class, "create"])->name('position.create');
    Route::post('/jabatan/store', [ADMIN\PositionController::class, "store"])->name('position.store');
    Route::delete('/jabatan/delete/{id}', [ADMIN\PositionController::class, "delete"])->name('position.delete');
    Route::get('/jabatan/edit/{id}', [ADMIN\PositionController::class, "edit"])->name('position.edit');
});
