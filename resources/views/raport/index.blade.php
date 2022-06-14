@extends('layouts.layout')
@section('content')
    @include('sweetalert::alert')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Raport</h1>
        <!-- Button trigger modal -->
        @role('Admin')
            <a href="{{ route('raport.create') }}">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    + Tambah
                </button>
            </a>
        @endrole
    </div>
    <!-- Modal -->


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Nama Siswa</th>
                            <th>Nama Guru</th>
                            <th>Tahun Ajaran</th>
                            <th>Catatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($raport as $raport)
                            <tr align="center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $raport->siswa->nama_siswa }}</td>
                                <td>{{ $raport->guru->nama_lengkap }}</td>
                                <td>{{ $raport->tahunajaran->tahun_ajaran }}</td>
                                <td>{{ $raport->catatan }}</td>
                                <td align="center" width="10%">
                                    <a href="{{ route('raport.edit', [$raport->id]) }}" data-toggle="tooltip" title="Edit"
                                        class="d-none  d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                        <i class="fas fa-edit fa-sm text-white-50"></i>
                                    </a>
                                    <a href="{{ route('raport.show', [$raport->id]) }}" data-toggle="tooltip" title="Edit"
                                        class="d-none  d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                        <i class="fas fa-eye fa-sm text-white-50"></i>
                                    </a>
                                    <a href="/raport/hapus/{{ $raport->id }}" data-toggle="tooltip" title="Hapus"
                                        onclick="return confirm('Yakin Ingin menghapus data?')"
                                        class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                        <i class="fas fa-trash-alt fa-sm text-white-50"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
