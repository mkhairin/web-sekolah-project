@extends('layouts.app')

@section('title', 'List Data Siswa')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="">
                    <h1 class="fs-3 mb-1">Daftar Data Siswa</h1>
                    <p class="mb-0">Kelola daftar semua, data siswa</p>
                </div>
                <div>
                    <a href="{{ url('/admin/student/add') }}" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div>
                <div class="d-flex gap-2 mb-3 flex-wrap justify-content-between">
                    <input type="text" class="form-control" placeholder="Search data siswa..." style="max-width: 250px;">
                    <div class="d-flex gap-2">

                        <button class="btn btn-outline-secondary">
                            <i class="ti ti-filter"></i> Filter
                        </button>
                        <button class="btn btn-outline-secondary">
                            <i class="ti ti-file-excel"></i> Excel
                        </button>
                        <button class="btn btn-outline-secondary">
                            <i class="ti ti-file-pdf"></i> PDF
                        </button>
                    </div>
                </div>
            </div>
            <div class="card table-responsive ">
                <table class="table mb-0 text-nowrap table-hover">
                    <thead class="table-light border-light">
                        <tr class="text-center">
                            {{-- <th scope="col">No</th> --}}
                            <th>Nama</th>
                            <th>NISN</th>
                            <th>NIS</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Tahun Masuk</th>
                            <th>Status</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($students as $student)
                            <tr class="align-middle">
                                {{-- <td colspan="0">{{ $i++ }}</td> --}}
                                <td>{{ $student->user->name }}</td>
                                <td>{{ $student->nisn }}</td>
                                <td>{{ $student->nis }}</td>
                                @if ($student->gender == 'L')
                                    <td>Laki-laki</td>
                                @elseif($student->gender == 'P')
                                    <td>Perempuan</td>
                                @else
                                    <td>Jenis kelamin tidak ditemukan!</td>
                                @endif
                                <td>{{ $student->place_of_birth }}</td>
                                <td class="text-center">{{ $student->date_of_birth }}</td>
                                @if ($student->religion == 'islam')
                                    <td class="text-center">Islam</td>
                                @elseif($student->religion == 'kristen')
                                    <td class="text-center">Kristen</td>
                                @elseif($student->religion == 'katholik')
                                    <td class="text-center">Katholik</td>
                                @elseif($student->religion == 'hindu')
                                    <td class="text-center">Hindu</td>
                                @elseif($student->religion == 'buddha')
                                    <td class="text-center">Buddha</td>
                                @else
                                    <td>Jenis agama tidak ditemukan!</td>
                                @endif
                                <td class="text-center">{{ $student->entry_year }}</td>
                                @if ($student->user->role == 'student')
                                    <td>
                                        <span class="badge bg-success-subtle text-success border border-success">Siswa
                                        </span>
                                    </td>
                                @endif

                                <td>
                                    <a href="#"><i class="ti ti-edit"></i></a>
                                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="">

                        <tr>
                            <td class="border-bottom-0">
                                Showing {{ $students->firstItem() ?? 0 }}
                                to {{ $students->lastItem() ?? 0 }}
                                of {{ $students->total() }} students
                            </td>

                            <td colspan="9" class="border-bottom-0">
                                <nav aria-label="Page navigation" class="d-flex justify-content-end">

                                    {{ $students->onEachSide(1)->links('pagination::bootstrap-4') }}

                                </nav>
                            </td>
                        </tr>

                    </tfoot>
                </table>
            </div>


        </div>

    </div>
@endsection
