<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\Student\StudentController;
use App\Http\Controllers\Admin\Teacher\TeacherController;

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

Route::get('/admin/student/list', [StudentController::class, 'index'])->name('admin.student.index');
Route::get('/admin/student/add', [StudentController::class, 'create'])->name('admin.student.create');
Route::post('/admin/student/store', [StudentController::class, 'store'])->name('admin.student.store');
Route::get('/admin/student/edit/{id}', [StudentController::class, 'edit'])->name('admin.student.edit');
Route::put('/admin/student/update/{id}', [StudentController::class, 'update'])->name('admin.student.update');

Route::get('/admin/teacher/list', [TeacherController::class, 'index'])->name('admin.teacher.index');
Route::get('/admin/teacher/add', [TeacherController::class, 'create'])->name('admin.teacher.create');