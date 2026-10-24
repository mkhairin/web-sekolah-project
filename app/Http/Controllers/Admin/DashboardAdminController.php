<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students as StudentsModel;

class DashboardAdminController extends Controller
{
    public function index()
    {
        return view('admin/dashboard-admin');
    }

    public function student_view()
    {
        $students = StudentsModel::with('user')->paginate(15);
        return view('admin/students-admin', compact('students'));
    }
}
