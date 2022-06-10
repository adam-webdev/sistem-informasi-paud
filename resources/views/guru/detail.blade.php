@extends('layouts.layout')
@section('content')
    @include('sweetalert::alert')

    <!-- Modal -->

    <h5 class="modal-title" id="exampleModalLabel">Detail Data Guru</h5>

    <div class="modal-body">
        <div class="form-group">
            <label for="user_id">Nama Lengkap :</label>
            <input type="text" name="tempat" value="{{ $guru->nama_lengkap }}" class="form-control" id="tempat" readonly>
        </div>

        <div class="form-group">
            <label for="tempat">Tempat Lahir :</label>
            <input type="text" name="tempat" value="{{ $guru->tempat_lahir }}" class="form-control" id="tempat" readonly>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal Lahir :</label>
            <input type="text" name="tanggal" value="{{ $guru->tanggal_lahir }}" class="form-control" id="tanggal"
                readonly>
        </div>
        <div class="form-group">
            <label for="pendidikan">Pendidikan :</label>
            <input type="text" name="pendidikan" value="{{ $guru->pendidikan }}" class="form-control" id="pendidikan"
                readonly>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan :</label>
            <input type="text" name="jabatan" value="{{ $guru->jabatan->nama_jabatan }}" class="form-control"
                id="jabatan" readonly>
        </div>

        <div class="form-group">
            <label for="no_hp">No HP :</label>
            <input type="text" name="no_hp" value="{{ $guru->no_hp }}" class="form-control" id="no_hp" readonly>
        </div>

        <div class="form-group">
            <label for="foto">Foto :</label><br>
            <img src="/storage/{{ $guru->image }}" alt="guru" style="object-fit:contain" width="150" height="150">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat :</label>
            <textarea type="text" rows="4" name="alamat" class="form-control" id=" alamat" readonly>{{ $guru->alamat }}
                </textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" onclick="history.back()" class="btn btn-secondary" data-dismiss="modal"> Kembali</button>
        {{-- <input type="submit" class="btn btn-primary btn-send" value="Simpan"> --}}
    </div>
@endsection
