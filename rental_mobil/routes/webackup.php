<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\JenisKendaraanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PeminjamanController;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/armada', [ArmadaController::class, 'index'])->name('armada.index');
Route::get('/armada/create', [ArmadaController::class, 'create'])->name('armada.create'); //add
Route::post('/armada/store', [ArmadaController::class, 'store'])->name('armada.store');
Route::get('/armada/{id}/edit', [ArmadaController::class, 'edit'])->name('armada.edit'); //edit
Route::delete('/armada/{id}', [ArmadaController::class, 'destroy'])->name('armada.destroy'); //delete
Route::get('/armada/{id}', [ArmadaController::class, 'view'])->name('armada.view'); //view

Route::get('/jenis_kendaraan', [JenisKendaraanController::class, 'index'])->name('jenis_kendaraan.index');
Route::get('/jenis_kendaraan/create', [JenisKendaraanController::class, 'create'])->name('jenis_kendaraan.create'); //add
Route::post('/jenis_kendaraan/store', [JenisKendaraanController::class, 'store'])->name('jenis_kendaraan.store');
Route::get('/jenis_kendaraan/{id}/edit', [JenisKendaraanController::class, 'edit'])->name('jenis_kendaraan.edit'); //edit
Route::delete('/jenis_kendaraan/{id}', [JenisKendaraanController::class, 'destroy'])->name('jenis_kendaraan.destroy'); //delete
Route::get('/jenis_kendaraan/{id}', [JenisKendaraanController::class, 'view'])->name('jenis_kendaraan.view'); //view

Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');
Route::get('/pembayaran/create', [PembayaranController::class, 'create'])->name('pembayaran.create'); //add
Route::post('/pembayaran/store', [PembayaranController::class, 'store'])->name('pembayaran.store');
Route::get('/pembayaran/{id}/edit', [PembayaranController::class, 'edit'])->name('pembayaran.edit'); //edit
Route::delete('/pembayaran/{id}', [PembayaranController::class, 'destroy'])->name('pembayaran.destroy'); //delete
Route::get('/pembayaran/{id}', [PembayaranController::class, 'view'])->name('pembayaran.view'); //view

Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create'); //add
Route::post('/peminjaman/store', [PeminjamanController::class, 'store'])->name('peminjaman.store');
Route::get('/peminjaman/{id}/edit', [PeminjamanController::class, 'edit'])->name('peminjaman.edit'); //edit
Route::delete('/peminjaman/{id}', [PeminjamanController::class, 'destroy'])->name('peminjaman.destroy'); //delete
Route::get('/peminjaman/{id}', [PeminjamanController::class, 'view'])->name('peminjaman.view'); //view
