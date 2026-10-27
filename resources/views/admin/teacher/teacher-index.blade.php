@extends('layouts.app')

@section('title', 'List Data Guru')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="">
                    <h1 class="fs-3 mb-1">Daftar Data Guru/Pengajar</h1>
                    <p class="mb-0">Kelola daftar semua, data Pengajar</p>
                </div>
                <div>
                    <a href="{{ url('#') }}" class="btn btn-primary">Tambah Data</a>
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
                            <th>NIP</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>No. Handphone</th>
                            <th>Alamat</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Tahun Bergabung</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($teachers as $teacher)
                            <tr class="align-middle">
                                {{-- <td colspan="0">{{ $i++ }}</td> --}}
                                <td>{{ $teacher->user->name }}</td>
                                <td>{{ $teacher->nip }}</td>
                                @if ($teacher->gender == 'L')
                                    <td>Laki-laki</td>
                                @elseif($teacher->gender == 'P')
                                    <td>Perempuan</td>
                                @else
                                    <td>Jenis kelamin tidak ditemukan!</td>
                                @endif
                                <td>{{ $teacher->place_of_birth }}</td>
                                <td class="text-center">{{ $teacher->date_of_birth }}</td>
                                <td>{{ $teacher->phone_number }}</td>
                                <td>{{ $teacher->address }}</td>
                                <td class="text-center">{{ $teacher->latest_education }}</td>
                                <td class="text-center">{{ $teacher->join_date }}</td>
                                @if ($teacher->user->role == 'teacher')
                                    <td>
                                        <span class="badge bg-success-subtle text-success border border-success">Guru
                                        </span>
                                    </td>
                                @endif

                                <td>
                                    <a href="{{ url('#' . $teacher->id) }}"><i class="ti ti-edit"></i></a>
                                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="">

                        <tr>
                            <td class="border-bottom-0">
                                Showing {{ $teachers->firstItem() ?? 0 }}
                                to {{ $teachers->lastItem() ?? 0 }}
                                of {{ $teachers->total() }} teachers
                            </td>

                            <td colspan="9" class="border-bottom-0">
                                <nav aria-label="Page navigation" class="d-flex justify-content-end">

                                    {{ $teachers->onEachSide(1)->links('pagination::bootstrap-4') }}

                                </nav>
                            </td>
                        </tr>

                    </tfoot>
                </table>
            </div>


        </div>

    </div>
@endsection
