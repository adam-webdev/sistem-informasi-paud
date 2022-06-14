@extends('layouts.layout')
@section('content')
    @include('sweetalert::alert')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Absensi</h1>
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Absensi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('absensi.store') }}" method="POST">
                    @csrf
                    {{-- $absensi->hadir = $request->hadir;
                    $absensi->izin = $request->izin;
                    $absensi->sakit = $request->sakit;
                    $absensi->siswa_id = $request->siswa_id;
                    $absensi->tahunajaran_id = $request->tahunajaran_id;
                    $absensi->jadwal_id = $request->jadwal_id; --}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="siswa_id">Nama Siswa :</label>
                            <select name="siswa_id" class="form-control" required id="siswa_id">
                                <option value="">-- Pilih Nama Siswa --</option>
                                @foreach ($siswa as $siswa)
                                    <option value="{{ $siswa->id }}">{{ $siswa->nama_siswa }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="absen">Kehadiran :</label>
                            <select name="absen" class="form-control" required id="absen">
                                <option value="">-- Kehadiran --</option>
                                <option value="Hadir">Hadir</option>
                                <option value="Izin">Izin</option>
                                <option value="Sakit">Sakit</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="tahun_ajaran">Tahun Ajaran :</label>
                            <select name="tahunajaran_id" class="form-control" required id="tahun_ajaran">
                                <option value="">-- Pilih Tahun Ajaran --</option>
                                @foreach ($tahunajaran as $tahunajaran)
                                    <option value="{{ $tahunajaran->id }}">{{ $tahunajaran->tahun_ajaran }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jadwal_id">Jadwal :</label>
                            <select name="jadwal_id" class="form-control" required id="jadwal_id">
                                <option value="">-- Pilih Jadwal --</option>
                                @foreach ($jadwal as $jadwal)
                                    <option value="{{ $jadwal->id }}">{{ $jadwal->hari }} -
                                        {{ $jadwal->materi_kegiatan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tangal">Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control" required>
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
                            <th>Siswa</th>
                            <th>Kelas</th>
                            <th>Tanggal</th>
                            <th>Hadir</th>
                            <th>Izin</th>
                            <th>Sakit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($absensi as $absensi)
                            <tr align="center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $absensi->jadwal->hari }}</td>
                                <td>{{ $absensi->siswa->nama_siswa }}</td>
                                <td>{{ $absensi->siswa->kelas->nama_kelas }}</td>
                                <td>{{ $absensi->tanggal }}</td>
                                <td>{{ $absensi->hadir === 'Hadir' ? $absensi->hadir : '-' }}
                                </td>
                                <td>{{ $absensi->izin === 'Izin' ? $absensi->izin === 'Izin' : '-' }}
                                </td>
                                <td>{{ $absensi->sakit === 'Sakit' ? $absensi->sakit : '-' }}
                                </td>
                                <td align="center" width="10%">
                                    <a href="{{ route('absensi.edit', [$absensi->id]) }}" data-toggle="tooltip"
                                        title="Edit" class="d-none  d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                        <i class="fas fa-edit fa-sm text-white-50"></i>
                                    </a>
                                    <a href="/absensi/hapus/{{ $absensi->id }}" data-toggle="tooltip" title="Hapus"
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
