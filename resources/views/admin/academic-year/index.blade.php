@extends('layouts.app')

@section('title', 'List Data Tahun Akademik')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="">
                    <h1 class="fs-3 mb-1">Daftar Tahun Akademik</h1>
                    <p class="mb-0">Kelola daftar semua, data tahun akademil</p>
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
                            <th>Tahun Ajaran/Semester</th>
                            <th>Status</th>
                            <th>Tahun Mulai</th>
                            <th>Tahun Akhir</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($academicyears as $data_academic)
                            <tr class="align-middle">
                                {{-- <td colspan="0">{{ $i++ }}</td> --}}
                                <td>{{ $data_academic->name }}</td>
                                <td>{{ $data_academic->is_true }}</td>
                                <td>{{ $data_academic->start_date }}</td>
                                <td>{{ $data_academic->end_date }}</td>
                                <td>
                                    <a href="{{ url('#' . $data_academic->id) }}"><i class="ti ti-edit"></i></a>
                                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada Data yang dimuat</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot class="">

                        {{-- <tr>
                            <td class="border-bottom-0">
                                Showing {{ $data_academic->firstItem() ?? 0 }}
                                to {{ $data_academic->lastItem() ?? 0 }}
                                of {{ $data_academic->total() }} academic year
                            </td>

                            <td colspan="9" class="border-bottom-0">
                                <nav aria-label="Page navigation" class="d-flex justify-content-end">

                                    {{ $data_academic->onEachSide(1)->links('pagination::bootstrap-4') }}

                                </nav>
                            </td>
                        </tr> --}}

                    </tfoot>
                </table>
            </div>


        </div>

    </div>
@endsection
