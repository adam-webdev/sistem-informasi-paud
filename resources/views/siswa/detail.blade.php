@extends('layouts.layout')
@section('content')
@section('title', 'Detail Siswa ')

@include('sweetalert::alert')

<!-- Modal -->

<h5 class="modal-title" id="exampleModalLabel">Detail Data Siswa</h5>

<div class="modal-body">
    <div class="form-group">
        <label for="nama">Nama Lengkap :</label>
        <input type="text" name="nama" value="{{ $siswa->nama_siswa }}" class="form-control" id="nama" readonly>
    </div>
    <div class="form-group">
        <label for="nis">NIS :</label>
        <input type="text" name="nis" value="{{ $siswa->nis }}" class="form-control" id="nis" readonly>
    </div>

    <div class="form-group">
        <label for="tempat">Tempat Lahir :</label>
        <input type="text" name="tempat" value="{{ $siswa->tempat_lahir }}" class="form-control" id="tempat"
            readonly>
    </div>
    <div class="form-group">
        <label for="kelamin">Jenis Kelamin :</label>
        <input type="text" name="kelamin" value="{{ $siswa->jenis_kelamin }}" class="form-control" id="kelamin"
            readonly>
    </div>
    <div class="form-group">
        <label for="agama">Agama :</label>
        <input type="text" name="agama" value="{{ $siswa->agama }}" class="form-control" id="agama" readonly>
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal Lahir :</label>
        <input type="text" name="tanggal" value="{{ $siswa->tanggal_lahir }}" class="form-control" id="tanggal"
            readonly>
    </div>
    <div class="form-group">
        <label for="ayah">Nama Ayah :</label>
        <input type="text" name="ayah" value="{{ $siswa->nama_ayah }}" class="form-control" id="ayah"
            readonly>
    </div>
    <div class="form-group">
        <label for="ibu">Nama Ibu :</label>
        <input type="text" name="ibu" value="{{ $siswa->nama_ibu }}" class="form-control" id="ibu"
            readonly>
    </div>

    <div class="form-group">
        <label for="jabatan">Kelas :</label>
        <input type="text" name="kelas" value="{{ $siswa->kelas->nama_kelas }}" class="form-control"
            id="jabatan" readonly>
    </div>

    <div class="form-group">
        <label for="no_hp">No HP :</label>
        <input type="text" name="no_hp" value="{{ $siswa->no_hp }}" class="form-control" id="no_hp" readonly>
    </div>

    <div class="form-group">
        <label for="foto">Foto :</label><br>
        <img src="/storage/{{ $siswa->image }}" alt="siswa" style="object-fit:contain" width="150"
            height="150">
    </div>

    <div class="form-group">
        <label for="alamat">Alamat :</label>
        <textarea type="text" rows="4" name="alamat" class="form-control" id=" alamat" readonly>{{ $siswa->alamat }}
                </textarea>
    </div>
</div>
<div class="modal-footer">
    <button type="button" onclick="history.back()" class="btn btn-secondary" data-dismiss="modal"> Kembali</button>
    {{-- <input type="submit" class="btn btn-primary btn-send" value="Simpan"> --}}
</div>
@endsection
