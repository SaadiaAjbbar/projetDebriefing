<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Formateur\DashboardController as FormateurDashboard;
use App\Http\Controllers\Etudiant\DashboardController as EtudiantDashboard;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'submitLogin'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Dashboards
|--------------------------------------------------------------------------
*/


Route::middleware(['auth','admin'])->group(function() {
    Route::get('/admin/dashboard', [AdminDashboard::class, 'index'])
        ->name('admin.dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/formateur/dashboard', [FormateurDashboard::class, 'index'])
        ->name('formateur.dashboard');

    Route::get('/etudiant/dashboard', [EtudiantDashboard::class, 'index'])
        ->name('etudiant.dashboard');
});

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'submitLogin'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Dashboards
|--------------------------------------------------------------------------
*/

Route::middleware(['auth','admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboard::class, 'index'])
        ->name('admin.dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/formateur/dashboard', [FormateurDashboard::class, 'index'])
        ->name('formateur.dashboard');

    Route::get('/etudiant/dashboard', [EtudiantDashboard::class, 'index'])
        ->name('etudiant.dashboard');
});
