@extends('layouts.layout')
@section('content')
@section('title', 'Edit Tahun Ajaran ')

@include('sweetalert::alert')

<!-- Modal -->

<h5 class="modal-title" id="exampleModalLabel">Edit Data Tahun Ajaran</h5>

<form action="{{ route('tahun-ajaran.update', [$tahun->id]) }}" method="POST">
    @csrf
    <div class="modal-body">
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="kode_tahun">Kode Tahun Ajaran :</label>
            <input type="text" name="kode_tahun" value="{{ $tahun->kode_tahun }}" class="form-control"
                id="kode_tahun" required>
        </div>
        <div class="form-group">
            <label for="tahun_ajaran">Tahun Ajaran :</label>
            <input type="text" name="tahun_ajaran" value="{{ $tahun->tahun_ajaran }}" class="form-control"
                id="tahun_ajaran" required>
        </div>
        <div class="form-group">
            <label for="semester">Semester :</label>
            <input type="text" name="semester" value="{{ $tahun->semester }}" class="form-control" id="semester"
                required>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button>
        @hasanyrole('Admin|Guru')
            <input type="submit" class="btn btn-primary btn-send" value="Simpan">
        @endhasanyrole
    </div>
</form>
@endsection
