<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('index');
});

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::get('/innovations', [AdminController::class, 'innovationList'])->name('innovations.index');
    Route::get('/innovations/create', [AdminController::class, 'innovationForm'])->name('innovations.create');
    Route::post('/innovations', [AdminController::class, 'storeInnovation'])->name('innovations.store');
    Route::get('/innovations/{id}', [AdminController::class, 'innovationView'])->name('innovations.view');
    Route::get('/plrr', [AdminController::class, 'plrrList'])->name('plrr.index');
    Route::get('/plrr/{id}', [AdminController::class, 'plrrView'])->name('plrr.view');
    Route::get('/plrr-feedback', [AdminController::class, 'plrrFeedback'])->name('plrr.feedback');
    Route::post('/plrr-feedback', [AdminController::class, 'storePlrrFeedback'])->name('plrr.store');
    Route::get('/analytics', [AdminController::class, 'analytics'])->name('analytics');
    Route::get('/reports', [AdminController::class, 'reports'])->name('reports');
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
});
