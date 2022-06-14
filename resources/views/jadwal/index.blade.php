@extends('layouts.layout')
@section('content')
    @include('sweetalert::alert')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Jadwal Pelajaran</h1>
        <!-- Button trigger modal -->
        @role('Admin')
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                + Tambah
            </button>
        @endrole
    </div>
    <!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jadwal Pelajaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('jadwal.store') }}" method="POST">
                    @csrf

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="hari">Hari :</label>
                            <input type="text" name="hari" class="form-control" id="hari" required>
                        </div>

                        <div class="form-group">
                            <label for="materi_kegiatan">Materi Kegiatan:</label>
                            <input type="text" name="materi_kegiatan" class="form-control" id="materi_kegiatan" required>
                        </div>

                        <div class="form-group">
                            <label for="guru_id">Nama Guru :</label>
                            <select name="guru_id" class="form-control" required id="guru_id">
                                <option value="">-- Pilih Nama Guru --</option>
                                @foreach ($guru as $guru)
                                    <option value="{{ $guru->id }}">{{ $guru->nama_lengkap }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kelas_id">Kelas :</label>
                            <select name="kelas_id" class="form-control" required id="kelas_id">
                                <option value="">-- Pilih Kelas --</option>
                                @foreach ($kelas as $kelas)
                                    <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan :</label>
                            <textarea type="text" rows="4" name="keterangan" class="form-control" id="keterangan" required>
                            </textarea>
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
                            <th>Hari</th>
                            <th>Guru</th>
                            <th>Kelas</th>
                            <th>Materi Kegiatan</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwal as $jadwal)
                            <tr align="center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $jadwal->hari }}</td>
                                <td>{{ $jadwal->guru->nama_lengkap }}</td>
                                <td>{{ $jadwal->kelas->nama_kelas }}</td>
                                <td>{{ $jadwal->materi_kegiatan }}</td>
                                <td>{{ $jadwal->keterangan }}</td>
                                <td align="center" width="10%">
                                    <a href="{{ route('jadwal.edit', [$jadwal->id]) }}" data-toggle="tooltip"
                                        title="Edit" class="d-none  d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                        <i class="fas fa-edit fa-sm text-white-50"></i>
                                    </a>
                                    <a href="/jadwal/hapus/{{ $jadwal->id }}" data-toggle="tooltip" title="Hapus"
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
