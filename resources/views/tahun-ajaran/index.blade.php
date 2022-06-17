@extends('layouts.layout')
@section('content')
@section('title', 'Data Tahun Ajaran ')

@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Tahun Ajaran</h1>
    <!-- Button trigger modal -->
    @hasanyrole('Admin|Guru')
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            + Tambah
        </button>
    @endhasanyrole
</div>
<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Tahun Ajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('tahun-ajaran.store') }}" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label for="kode_tahun">Kode Tahun Ajaran :</label>
                        <input type="text" name="kode_tahun" class="form-control" id="kode_tahun" required>
                    </div>

                    <div class="form-group">
                        <label for="tahun_ajaran">Tahun Ajaran :</label>
                        <input type="text" name="tahun_ajaran" class="form-control" id="tahun_ajaran" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun_ajaran">Semester :</label>
                        <input type="text" name="semester" class="form-control" id="tahun_ajaran" required>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button>
                    <input type="submit" class="btn btn-primary btn-send" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
{{-- modal tambah dokter --}}



<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>Kode Tahun Ajaran</th>
                        <th>Tahun Ajaran</th>
                        <th>Semester</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tahun as $tahun)
                        <tr align="center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $tahun->kode_tahun }}</td>
                            <td>{{ $tahun->tahun_ajaran }}</td>
                            <td>{{ $tahun->semester }}</td>
                            @hasanyrole('Admin|Guru')
                                <td align="center" width="10%">
                                    <a href="{{ route('tahun-ajaran.edit', [$tahun->id]) }}" data-toggle="tooltip"
                                        title="Edit" class="d-none  d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                        <i class="fas fa-edit fa-sm text-white-50"></i>
                                    </a>
                                    <a href="/tahun-ajaran/hapus/{{ $tahun->id }}" data-toggle="tooltip" title="Hapus"
                                        onclick="return confirm('Yakin Ingin menghapus data?')"
                                        class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                        <i class="fas fa-trash-alt fa-sm text-white-50"></i>
                                    </a>
                                </td>
                            @endhasanyrole
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
