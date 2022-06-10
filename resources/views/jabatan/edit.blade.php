@extends('layouts.layout')
@section('content')
    @include('sweetalert::alert')

    <!-- Modal -->

    <h5 class="modal-title" id="exampleModalLabel">Edit Data Jabatan</h5>

    <form action="{{ route('jabatan.update', [$jabatan->id]) }}" method="POST">
        @csrf
        <div class="modal-body">
            <input type="hidden" name="_method" value="PUT">

            <div class="form-group">
                <label for="kode_jabatan">Kode Jabatan :</label>
                <input type="text" name="kode_jabatan" value="{{ $jabatan->kode_jabatan }}" class="form-control"
                    id="kode_jabatan" required>
            </div>
            <div class="form-group">
                <label for="nama_jabatan">Jabatan :</label>
                <input type="text" name="nama_jabatan" value="{{ $jabatan->nama_jabatan }}" class="form-control"
                    id="nama_jabatan" required>
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button>
            <input type="submit" class="btn btn-primary btn-send" value="Simpan">
        </div>
    </form>
@endsection
