@extends('layouts.layout')
@section('content')
    @include('sweetalert::alert')

    <!-- Modal -->

    <h5 class="modal-title" id="exampleModalLabel">Edit Data Jadwal</h5>

    <form action="{{ route('jadwal.update', [$jadwal->id]) }}" method="POST">
        @csrf
        <div class="modal-body">
            <input type="hidden" name="_method" value="PUT">

            <div class="form-group">
                <label for="hari">Hari :</label>
                <input type="text" value="{{ $jadwal->hari }}" name="hari" class="form-control" id="hari" required>
            </div>

            <div class="form-group">
                <label for="materi_kegiatan">Materi Kegiatan:</label>
                <input type="text" value="{{ $jadwal->materi_kegiatan }}" name="materi_kegiatan" class="form-control"
                    id="materi_kegiatan" required>
            </div>

            <div class="form-group">
                <label for="guru_id">Nama Guru :</label>
                <select name="guru_id" class="form-control" required id="guru_id">
                    @foreach ($guru as $guru)
                        <option value="{{ $guru->id }}" {{ $jadwal->guru->id === $guru->id ? 'selected' : '' }}>
                            {{ $jadwal->guru->nama_lengkap === $guru->nama_lengkap ? $jadwal->guru->nama_lengkap : $guru->nama_lengkap }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="kelas_id">Kelas :</label>
                <select name="kelas_id" class="form-control" required id="kelas_id">
                    @foreach ($kelas as $kelas)
                        <option value="{{ $kelas->id }}" {{ $jadwal->kelas->id === $kelas->id ? 'selected' : '' }}>
                            {{ $jadwal->kelas->nama_kelas === $kelas->nama_kelas ? $jadwal->kelas->nama_kelas : $kelas->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan :</label>
                <textarea type="text" rows="4" name="keterangan" class="form-control" id="keterangan" required>{{ $jadwal->keterangan }}
                </textarea>
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onclick="history.back()"> Kembali</button>
            <input type="submit" class="btn btn-primary btn-send" value="Simpan">
        </div>
    </form>
@endsection
