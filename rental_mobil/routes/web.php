<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\JenisKendaraanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AksesController;

// Route::get('/', function () {
//     return view('frontend.home');
// });

Route::get('/', [FrontendController::class, 'home'])->name('frontend.home');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/blog', [FrontendController::class, 'blog'])->name('frontend.blog');
Route::get('/cars', [FrontendController::class, 'cars'])->name('frontend.cars');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/princing', [FrontendController::class, 'princing'])->name('frontend.princing');
Route::get('/services', [FrontendController::class, 'services'])->name('frontend.services');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/armada', [ArmadaController::class, 'index'])->name('armada.index');
    Route::get('/armada/create', [ArmadaController::class, 'create'])->name('armada.create')->middleware('auth','admin'); //add
    Route::post('/armada/store', [ArmadaController::class, 'store'])->name('armada.store')->middleware('auth','admin');
    Route::get('/armada/{id}/edit', [ArmadaController::class, 'edit'])->name('armada.edit')->middleware('auth','admin'); //edit
    Route::delete('/armada/{id}', [ArmadaController::class, 'destroy'])->name('armada.destroy')->middleware('auth','admin'); //delete
    Route::get('/armada/{id}', [ArmadaController::class, 'view'])->name('armada.view'); //view

    Route::get('/jenis_kendaraan', [JenisKendaraanController::class, 'index'])->name('jenis_kendaraan.index');
    Route::get('/jenis_kendaraan/create', [JenisKendaraanController::class, 'create'])->name('jenis_kendaraan.create')->middleware('auth','admin'); //add
    Route::post('/jenis_kendaraan/store', [JenisKendaraanController::class, 'store'])->name('jenis_kendaraan.store')->middleware('auth','admin');
    Route::get('/jenis_kendaraan/{id}/edit', [JenisKendaraanController::class, 'edit'])->name('jenis_kendaraan.edit')->middleware('auth','admin'); //edit
    Route::delete('/jenis_kendaraan/{id}', [JenisKendaraanController::class, 'destroy'])->name('jenis_kendaraan.destroy')->middleware('auth','admin'); //delete
    Route::get('/jenis_kendaraan/{id}', [JenisKendaraanController::class, 'view'])->name('jenis_kendaraan.view'); //view

    Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');
    Route::get('/pembayaran/create', [PembayaranController::class, 'create'])->name('pembayaran.create')->middleware('auth','admin'); //add
    Route::post('/pembayaran/store', [PembayaranController::class, 'store'])->name('pembayaran.store')->middleware('auth','admin');
    Route::get('/pembayaran/{id}/edit', [PembayaranController::class, 'edit'])->name('pembayaran.edit')->middleware('auth','admin'); //edit
    Route::delete('/pembayaran/{id}', [PembayaranController::class, 'destroy'])->name('pembayaran.destroy')->middleware('auth','admin'); //delete
    Route::get('/pembayaran/{id}', [PembayaranController::class, 'view'])->name('pembayaran.view'); //view

    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create')->middleware('auth','admin'); //add
    Route::post('/peminjaman/store', [PeminjamanController::class, 'store'])->name('peminjaman.store')->middleware('auth','admin');
    Route::get('/peminjaman/{id}/edit', [PeminjamanController::class, 'edit'])->name('peminjaman.edit')->middleware('auth','admin'); //edit
    Route::delete('/peminjaman/{id}', [PeminjamanController::class, 'destroy'])->name('peminjaman.destroy')->middleware('auth','admin'); //delete
    Route::get('/peminjaman/{id}', [PeminjamanController::class, 'view'])->name('peminjaman.view'); //view

    Route::get('/akses', [AksesController::class, 'index'])->name('akses.index');

    Route::get('/timeline', [TimelineController::class, 'index'])->name('timeline.index');
});

require __DIR__.'/auth.php';
