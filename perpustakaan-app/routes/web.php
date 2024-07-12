<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\MemberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin as ADMIN;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::prefix('/admin')->group(function () {
        // Route::get('/', [ADMIN\DashboardController::class, "index"])->name('dashboard');
        Route::get('/dashboard', [ADMIN\DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
        // position route
        Route::get('/position', [ADMIN\PositionController::class, 'index'])->name('position.index');
        Route::get('/position/create', [ADMIN\PositionController::class, "create"])->name('position.create');
        Route::post('/position/store', [ADMIN\PositionController::class, "store"])->name('position.store');
        Route::delete('/position/delete/{id}', [ADMIN\PositionController::class, "delete"])->name('position.delete');
        Route::get('/position/edit/{id}', [ADMIN\PositionController::class, "edit"])->name('position.edit');
        // book route
        Route::get('/book', [ADMIN\BookController::class, 'index'])->name('book.index');
        Route::get('/book/create', [ADMIN\BookController::class, "create"])->name('book.create');
        Route::post('/book/store', [ADMIN\BookController::class, "store"])->name('book.store');
        Route::delete('/book/delete/{id}', [ADMIN\BookController::class, "delete"])->name('book.delete');
        Route::get('/book/edit/{id}', [ADMIN\BookController::class, "edit"])->name('book.edit');
        // genre route
        Route::get('/genre', [ADMIN\GenreController::class, 'index'])->name('genre.index');
        Route::get('/genre/create', [ADMIN\GenreController::class, "create"])->name('genre.create');
        Route::post('/genre/store', [ADMIN\GenreController::class, "store"])->name('genre.store');
        Route::delete('/genre/delete/{id}', [ADMIN\GenreController::class, "delete"])->name('genre.delete');
        Route::get('/genre/edit/{id}', [ADMIN\GenreController::class, "edit"])->name('genre.edit');
        // employee route
        Route::get('/employee', [ADMIN\EmployeeController::class, 'index'])->name('employee.index');
        Route::get('/employee/create', [ADMIN\EmployeeController::class, "create"])->name('employee.create');
        Route::post('/employee/store', [ADMIN\EmployeeController::class, "store"])->name('employee.store');
        Route::delete('/employee/delete/{id}', [ADMIN\EmployeeController::class, "delete"])->name('employee.delete');
        Route::get('/employee/edit/{id}', [ADMIN\EmployeeController::class, "edit"])->name('employee.edit');
        // member route
        Route::get('/member', [ADMIN\MemberController::class, 'index'])->name('member.index');
        Route::get('/member/create', [ADMIN\MemberController::class, "create"])->name('member.create');
        Route::post('/member/store', [ADMIN\MemberController::class, "store"])->name('member.store');
        Route::delete('/member/delete/{id}', [ADMIN\MemberController::class, "delete"])->name('member.delete');
        Route::get('/member/edit/{id}', [ADMIN\MemberController::class, "edit"])->name('member.edit');
    });
});

require __DIR__.'/auth.php';
