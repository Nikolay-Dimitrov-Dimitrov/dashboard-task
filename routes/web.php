<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/configure/{position}', [DashboardController::class, 'configure'])->name('configure');
Route::post('/store/{position}', [DashboardController::class, 'store'])->name('store');
Route::delete('/delete/{position}', [DashboardController::class, 'delete'])->name('delete');
