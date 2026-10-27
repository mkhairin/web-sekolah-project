<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StudentRequest;
use App\Models\Students as StudentModel;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    public function index()
    {
        $students = StudentModel::with('user')->paginate(10);
        return view('admin/student/student-index', compact('students'));
    }

    public function create()
    {
        return view('admin/student/student-create');
    }

    public function store(StudentRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        StudentModel::create($validated);
        
        Alert::success('Success', 'Data Siswa berhasil ditambahkan!');
        return redirect()->to('/admin/student/list');
    }

    public function edit(string $id)
    {
        $students = StudentModel::with('user')->findOrFail($id);
        return view('admin/student/student-update', compact('students'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validated();
        $students = StudentModel::findOrFail($id);
        $students->update($validated);

        Alert::success('Success', 'Data Siswa berhasil diupdate!');
        return redirect()->to('/admin/student/list');
    }
}
