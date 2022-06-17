@extends('layouts.layout')
@section('content')
@section('title', 'Edit Absensi')
@include('sweetalert::alert')

<!-- Modal -->

<h5 class="modal-title" id="exampleModalLabel">Edit Data Absensi</h5>

<form action="{{ route('absensi.update', [$absensi->id]) }}" method="POST">
    @csrf
    <div class="modal-body">
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label for="siswa_id">Nama Siswa :</label>
            <select name="siswa_id" class="form-control" required id="siswa_id">
                <option value="">-- Pilih Nama Siswa --</option>
                @foreach ($siswa as $siswa)
                    <option value="{{ $siswa->id }}" {{ $absensi->siswa->id === $siswa->id ? 'selected' : '' }}>
                        {{ $absensi->siswa->nama_siswa === $siswa->nama_siswa ? $absensi->siswa->nama_siswa : $siswa->nama_siswa }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="absen">Kehadiran :</label>
            <select name="absen" class="form-control" required id="absen">
                <option value="Hadir" {{ $absensi->hadir === 1 ? 'selected' : '' }}>Hadir</option>
                <option value="Izin" {{ $absensi->izin === 1 ? 'selected' : '' }}>Izin</option>
                <option value="Sakit" {{ $absensi->sakit === 1 ? 'selected' : '' }}>Sakit</option>
            </select>
        </div>


        <div class="form-group">
            <label for="tahun_ajaran">Tahun Ajaran :</label>
            <select name="tahunajaran_id" class="form-control" required id="tahun_ajaran">
                @foreach ($tahunajaran as $tahunajaran)
                    <option value="{{ $tahunajaran->id }}"
                        {{ $absensi->tahunajaran->id === $tahunajaran->id ? 'selected' : '' }}>
                        {{ $absensi->tahunajaran->tahun_ajaran === $tahunajaran->tahun_ajaran ? $absensi->tahunajaran->tahun_ajaran : $tahunajaran->tahun_ajaran }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jadwal_id">Jadwal :</label>
            <select name="jadwal_id" class="form-control" required id="jadwal_id">
                @foreach ($jadwal as $jadwal)
                    <option value="{{ $jadwal->id }}"
                        {{ $absensi->jadwal->id === $jadwal->id ? 'selected' : '' }}>
                        {{ $absensi->jadwal->hari === $jadwal->hari ? $absensi->jadwal->hari . ' - ' . $jadwal->materi_kegiatan : $jadwal->hari . '-' . $jadwal->materi_kegiatan }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tangal">Tanggal</label>
            <input type="date" value="{{ $absensi->tanggal }}" name="tanggal" id="tanggal" class="form-control"
                required>
        </div>


    </div>
    @hasanyrole('Admin|Guru')
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onclick="history.back()"> Kembali</button>
            <input type="submit" class="btn btn-primary btn-send" value="Simpan">
        </div>
    @endhasanyrole
</form>
@endsection
