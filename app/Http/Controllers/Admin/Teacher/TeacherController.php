<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teachers as TeacherModel;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = TeacherModel::with('user')->paginate(10);
        return view('admin/teacher/teacher-index', compact('teachers'));
    }

    public function create()
    {
        return view('admin/teacher/teacher-create');
    }

    
}
