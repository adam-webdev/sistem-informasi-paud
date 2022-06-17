@extends('layouts.layout')
@section('content')
@section('title', 'Edit Kelas')

@include('sweetalert::alert')

<!-- Modal -->

<h5 class="modal-title" id="exampleModalLabel">Edit Data Kelas</h5>

<form action="{{ route('kelas.update', [$kelas->id]) }}" method="POST">
    @csrf
    <div class="modal-body">
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label for="kode_kelas">Kode Kelas :</label>
            <input type="text" name="kode_kelas" value="{{ $kelas->kode_kelas }}" class="form-control"
                id="kode_kelas" required>
        </div>
        <div class="form-group">
            <label for="nama_kelas">Kelas :</label>
            <input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}" class="form-control"
                id="nama_kelas" required>
        </div>


    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button>
        <input type="submit" class="btn btn-primary btn-send" value="Simpan">
    </div>
</form>
@endsection
