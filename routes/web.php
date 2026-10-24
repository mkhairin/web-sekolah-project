<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\DashboardAdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signin', [DashboardController::class, 'login'])->name('signin.index');
Route::get('/signup', [DashboardController::class, 'signup'])->name('signup.index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/inventory', [DashboardController::class, 'inventory'])->name('inventory.index');
Route::get('/add-product', [DashboardController::class, 'addProduct'])->name('product.add');
Route::get('/reports', [DashboardController::class, 'reports'])->name('reports.index');

Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard.index');
Route::get('/admin/student-list', [DashboardAdminController::class, 'student_view'])->name('admin.student.list');
