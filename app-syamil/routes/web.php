<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Controllers\KelurahanController;

Route::get('/', function () {
    return view('frontend');
});

// Route::get('/dashboard', function () {
//     return view('dashboard'); 
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //routing pasien
    Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
    Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create'); //add
    Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
    Route::get('/pasien/{id}/edit', [PasienController::class, 'edit'])->name('pasien.edit'); //edit
    Route::delete('/pasien/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy'); //delete
    Route::get('/pasien/{id}', [PasienController::class, 'view'])->name('pasien.view'); //view
    //routing paramedik
    Route::get('/paramedik', [ParamedikController::class, 'index'])->name('paramedik.index')->middleware('auth','admin');
    Route::get('/paramedik/create', [ParamedikController::class, 'create'])->name('paramedik.create')->middleware('auth','admin'); //add
    Route::post('/paramedik/store', [ParamedikController::class, 'store'])->name('paramedik.store')->middleware('auth','admin');
    Route::get('/paramedik/{id}/edit', [ParamedikController::class, 'edit'])->name('paramedik.edit')->middleware('auth','admin'); //edit
    Route::delete('/paramedik/{id}', [ParamedikController::class, 'destroy'])->name('paramedik.destroy')->middleware('auth','admin'); //delete
    Route::get('/paramedik/{id}', [ParamedikController::class, 'view'])->name('paramedik.view')->middleware('auth','admin'); //view
    //routing periksa
    Route::get('/periksa', [PeriksaController::class, 'index'])->name('periksa.index')->middleware('auth','admin');
    Route::get('/periksa/create', [PeriksaController::class, 'create'])->name('periksa.create')->middleware('auth','admin'); //add
    Route::post('/periksa/store', [PeriksaController::class, 'store'])->name('periksa.store')->middleware('auth','admin');
    Route::get('/periksa/{id}/edit', [PeriksaController::class, 'edit'])->name('periksa.edit')->middleware('auth','admin'); //edit
    Route::delete('/periksa/{id}', [PeriksaController::class, 'destroy'])->name('periksa.destroy')->middleware('auth','admin'); //delete
    Route::get('/periksa/{id}', [PeriksaController::class, 'view'])->name('periksa.view')->middleware('auth','admin'); //view
    //routing UnitKerja
    Route::get('/unit_kerja', [UnitKerjaController::class, 'index'])->name('unit_kerja.index');
    Route::get('/unit_kerja/create', [UnitKerjaController::class, 'create'])->name('unit_kerja.create'); //add
    Route::post('/unit_kerja/store', [UnitKerjaController::class, 'store'])->name('unit_kerja.store');
    Route::get('/unit_kerja/{id}/edit', [UnitKerjaController::class, 'edit'])->name('unit_kerja.edit'); //edit
    Route::delete('/unit_kerja/{id}', [UnitKerjaController::class, 'destroy'])->name('unit_kerja.destroy'); //delete
    Route::get('/unit_kerja/{id}', [UnitKerjaController::class, 'view'])->name('unit_kerja.view'); //view
    //routing Kelurahan
    Route::get('/kelurahan', [KelurahanController::class, 'index'])->name('kelurahan.index');
    Route::get('/kelurahan/create', [KelurahanController::class, 'create'])->name('kelurahan.create'); //add
    Route::post('/kelurahan/store', [KelurahanController::class, 'store'])->name('kelurahan.store');
    Route::get('/kelurahan/{id}/edit', [KelurahanController::class, 'edit'])->name('kelurahan.edit'); //edit
    Route::delete('/kelurahan/{id}', [KelurahanController::class, 'destroy'])->name('kelurahan.destroy'); //delete
    Route::get('/kelurahan/{id}', [KelurahanController::class, 'view'])->name('kelurahan.view'); //view
});

require __DIR__.'/auth.php';

//menampilkan web melalui file di lokasi lain - cara 2
Route::get('/profil', function () {
    return view('profil'); //ke file profil.blade.php
});

//routing dengan memanfaatkan controller - cara 3

Route::get('/admin', [AdminController::class, 'index']);






