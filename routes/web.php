<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/inventory', [DashboardController::class, 'inventory'])->name('inventory.index');
Route::get('/add-product', [DashboardController::class, 'addProduct'])->name('product.add');
Route::get('/reports', [DashboardController::class, 'reports'])->name('reports.index');