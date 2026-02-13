<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClasseController;

Route::get('/', function () {
    return 'HOME';
})->name('home');

Route::get('/admin/dashboard', function () {
    return 'ADMIN DASHBOARD';
})->name('admin.dashboard');;

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])>middelware('g')->name('dashboard');
    Route::get('/admin/classes', [ClasseController::class, 'index'])->name('classes.index');
    Route::get('/admin/classes/create', [ClasseController::class, 'create'])->name('classes.create');
    Route::post('/admin/classes', [ClasseController::class, 'store'])->name('classes.store');
});


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'submitLogin'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
