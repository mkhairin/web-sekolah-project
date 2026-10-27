@extends('layouts.app')
@section('title', 'Tambah Data Siswa')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
                <div class="">
                    <h1 class="fs-3 mb-1">Tambah Data Siswa</h1>
                    <p class="mb-0">Kelola data siswa</p>
                </div>
                <div>
                    <a href="{{ url('/admin/student/list') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="fw-bold">Data Siswa</h5>
                    <form id="addProductForm" action="{{ url('/admin/student/store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <x-form.dynamic-select name="student_id" role="student" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <x-form.input name="nisn" type="text" for="nisn"
                                    label="NISN (Nomor Induk Siswa Nasional)" placeholder="Masukkan data NISN" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <x-form.input name="nisn" type="text" for="nis" label="NIS (Nomor Induk Siswa)"
                                    placeholder="Masukkan data NIS" required />
                            </div>
                            <div class="col-md-6 mb-3">
                                <x-form.select name="gender" label="Jenis Kelamin" type="gender"
                                    placeholder="Pilih jenis kelamin" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <x-form.input name="place_of_birth" type="text" for="place_of_birth" label="Tempat Lahir"
                                    placeholder="Masukkan data Tempat lahir" required />
                            </div>
                            <div class="col-md-6 mb-3">
                                <x-form.input name="date_of_birth" type="date" for="date_of_birth" label="Tanggal Lahir"
                                    required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <x-form.select name="religion" label="Agama" type="religion" placeholder="Pilih Agama"
                                    required />
                            </div>
                            <div class="col-md-6 mb-3">
                                <x-form.input name="address" type="text" for="address" label="Alamat"
                                    placeholder="Masukkan data Alamat" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <x-form.input name="phone_number" type="text" for="phone_number" label="No. Handphone"
                                    placeholder="Masukkan data Nomor" required />
                            </div>
                            <div class="col-md-6 mb-3">
                                <x-form.input name="entry_year" type="number" for="entry_year" label="Tahun Masuk"
                                    min="1900" max="2100" placeholder="Masukkan data Tahun" required />
                            </div>
                        </div>
                        <h5 class="fw-bold mt-3">Data Orang Tua Siswa</h5>
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <x-form.input name="parent_name" type="text" for="parent_name"
                                    label="Nama Wali/Orang Tua Murid" placeholder="Masukkan data Nama Wali" required />
                            </div>
                            <div class="col-md-6 mb-3">
                                <x-form.input name="parent_phone_number" type="text" for="parent_phone_number"
                                    label="No. Handphone" placeholder="Masukkan data Nomor Wali" required />
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Clear</button>
                        </div>

                    </form>
                </div>
            </div>


        </div>

    </div>
@endsection
