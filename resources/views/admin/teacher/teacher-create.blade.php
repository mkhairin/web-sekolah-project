@extends('layouts.app')
@section('title', 'Tambah Data Pengajar')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
                <div class="">
                    <h1 class="fs-3 mb-1">Tambah Data Guru/Pengajar</h1>
                    <p class="mb-0">Kelola data Pengajar</p>
                </div>
                <div>
                    <a href="{{ url('/admin/teacher/list') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="fw-bold">Data Guru</h5>
                    <form id="addProductForm" action="{{ url('#') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <x-form.dynamic-select name="teacher_id" role="teacher" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <x-form.input name="nip" type="text" for="nip" label="NIP"
                                    placeholder="Masukkan data NIP" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <x-form.select name="gender" label="Jenis Kelamin" type="gender"
                                    placeholder="Pilih jenis kelamin" required />
                            </div>
                            <div class="col-md-6 mb-3">
                                <x-form.input name="place_of_birth" type="text" for="place_of_birth" label="Tempat Lahir"
                                    placeholder="Masukkan data Tempat lahir" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <x-form.input name="date_of_birth" type="date" for="date_of_birth" label="Tanggal Lahir"
                                    required />
                            </div>
                            <div class="col-md-6 mb-3">
                                <x-form.input name="phone_number" type="text" for="phone_number" label="No. Handphone"
                                    placeholder="Masukkan data Nomor" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <x-form.input name="address" type="text" for="address" label="Alamat"
                                    placeholder="Masukkan data Alamat" required />
                            </div>
                            <div class="col-md-6 mb-3">
                                <x-form.input name="latest_education" type="text" for="latest_education"
                                    label="Pendidikan Terakhir" placeholder="Masukkan data pendidikan terakhir" required />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <x-form.input name="join_date" type="date" for="join_date"
                                    label="Tanggal Masuk/Bergabung" required />
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
