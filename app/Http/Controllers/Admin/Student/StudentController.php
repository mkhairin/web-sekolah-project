<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'user_id' => 'required|uuid|exists:users,id',
            'nisn' => 'required|min:3|max:20',
            'nis' => 'required|min:3|max:20',
            'gender' => 'required|in:L,P',
            'place_of_birth' => 'required|string|max:100',
            'date_of_birth' => 'required|date',
            'religion' => 'required|in:islam,kristen,katholik,hindu,buddha',
            'address' => 'required|string',
            'phone_number' => 'required|string|max:20',
            'parent_name' => 'required|string|max:50',
            'parent_phone_number' => 'required|string|max:20',
            'entry_year' => 'required|integer',
        ], [
            'user_id.required' => 'Pengguna wajib dipilih.',
            'user_id.uuid' => 'ID pengguna tidak valid.',
            'user_id.exists' => 'Pengguna yang dipilih tidak ditemukan.',
            'nisn.required' => 'NISN wajib diisi.',
            'nisn.min' => 'NISN minimal harus terdiri dari 3 karakter.',
            'nisn.max' => 'NISN maksimal harus terdiri dari 20 karakter.',
            'nis.required' => 'NIS wajib diisi.',
            'nis.min' => 'NIS minimal harus terdiri dari 3 karakter.',
            'nis.max' => 'NIS maksimal harus terdiri dari 20 karakter.',
            'gender.required' => 'Jenis kelamin wajib dipilih.',
            'gender.in' => 'Jenis kelamin harus berupa L atau P.',
            'place_of_birth.required' => 'Tempat lahir wajib diisi.',
            'place_of_birth.string' => 'Tempat lahir harus berupa teks.',
            'place_of_birth.max' => 'Tempat lahir maksimal 100 karakter.',
            'date_of_birth.required' => 'Tanggal lahir wajib diisi.',
            'date_of_birth.date' => 'Tanggal lahir harus berupa tanggal yang valid.',
            'religion.required' => 'Agama wajib dipilih.',
            'religion.in' => 'Agama yang dipilih tidak valid.',
            'address.required' => 'Alamat wajib diisi.',
            'address.string' => 'Alamat harus berupa teks.',
            'phone_number.required' => 'Nomor telepon wajib diisi.',
            'phone_number.string' => 'Nomor telepon harus berupa teks.',
            'phone_number.max' => 'Nomor telepon maksimal 20 karakter.',
            'parent_name.required' => 'Nama orang tua/wali wajib diisi.',
            'parent_name.string' => 'Nama orang tua/wali harus berupa teks.',
            'parent_name.max' => 'Nama orang tua/wali maksimal 50 karakter.',
            'parent_phone_number.required' => 'Nomor telepon orang tua/wali wajib diisi.',
            'parent_phone_number.string' => 'Nomor telepon orang tua/wali harus berupa teks.',
            'parent_phone_number.max' => 'Nomor telepon orang tua/wali maksimal 20 karakter.',
            'entry_year.required' => 'Tahun masuk wajib diisi.',
            'entry_year.integer' => 'Tahun masuk harus berupa angka bulat.',
        ]);

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
        // dd($request->all());
        $validated = $request->validate([
            'user_id' => 'required|uuid|exists:users,id',
            'nisn' => 'required|min:3|max:20',
            'nis' => 'required|min:3|max:20',
            'gender' => 'required|in:L,P',
            'place_of_birth' => 'required|string|max:100',
            'date_of_birth' => 'required|date',
            'religion' => 'required|in:islam,kristen,katholik,hindu,buddha',
            'address' => 'required|string',
            'phone_number' => 'required|string|max:20',
            'parent_name' => 'required|string|max:50',
            'parent_phone_number' => 'required|string|max:20',
            'entry_year' => 'required|integer',
        ], [
            'user_id.required' => 'Pengguna wajib dipilih.',
            'user_id.uuid' => 'ID pengguna tidak valid.',
            'user_id.exists' => 'Pengguna yang dipilih tidak ditemukan.',
            'nisn.required' => 'NISN wajib diisi.',
            'nisn.min' => 'NISN minimal harus terdiri dari 3 karakter.',
            'nisn.max' => 'NISN maksimal harus terdiri dari 20 karakter.',
            'nis.required' => 'NIS wajib diisi.',
            'nis.min' => 'NIS minimal harus terdiri dari 3 karakter.',
            'nis.max' => 'NIS maksimal harus terdiri dari 20 karakter.',
            'gender.required' => 'Jenis kelamin wajib dipilih.',
            'gender.in' => 'Jenis kelamin harus berupa L atau P.',
            'place_of_birth.required' => 'Tempat lahir wajib diisi.',
            'place_of_birth.string' => 'Tempat lahir harus berupa teks.',
            'place_of_birth.max' => 'Tempat lahir maksimal 100 karakter.',
            'date_of_birth.required' => 'Tanggal lahir wajib diisi.',
            'date_of_birth.date' => 'Tanggal lahir harus berupa tanggal yang valid.',
            'religion.required' => 'Agama wajib dipilih.',
            'religion.in' => 'Agama yang dipilih tidak valid.',
            'address.required' => 'Alamat wajib diisi.',
            'address.string' => 'Alamat harus berupa teks.',
            'phone_number.required' => 'Nomor telepon wajib diisi.',
            'phone_number.string' => 'Nomor telepon harus berupa teks.',
            'phone_number.max' => 'Nomor telepon maksimal 20 karakter.',
            'parent_name.required' => 'Nama orang tua/wali wajib diisi.',
            'parent_name.string' => 'Nama orang tua/wali harus berupa teks.',
            'parent_name.max' => 'Nama orang tua/wali maksimal 50 karakter.',
            'parent_phone_number.required' => 'Nomor telepon orang tua/wali wajib diisi.',
            'parent_phone_number.string' => 'Nomor telepon orang tua/wali harus berupa teks.',
            'parent_phone_number.max' => 'Nomor telepon orang tua/wali maksimal 20 karakter.',
            'entry_year.required' => 'Tahun masuk wajib diisi.',
            'entry_year.integer' => 'Tahun masuk harus berupa angka bulat.',
        ]);

        $students = StudentModel::findOrFail($id);
        $students->update($validated);

        Alert::success('Success', 'Data Siswa berhasil diupdate!');
        return redirect()->to('/admin/student/list');
    }
}
