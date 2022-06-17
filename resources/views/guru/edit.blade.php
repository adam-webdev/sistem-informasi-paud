@extends('layouts.layout')
@section('content')
@section('title', 'Edit Guru')

@include('sweetalert::alert')

<!-- Modal -->

<h5 class="modal-title" id="exampleModalLabel">Edit Data Guru</h5>

<form action="{{ route('guru.update', [$guru->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="user_id">Nama User :</label>
            <select name="user_id" class="form-control" required id="user_id">
                @foreach ($user as $user)
                    <option value="{{ $user->id }}" {{ $guru->user->id === $user->id ? 'selected' : '' }}>
                        {{ $guru->user->name === $user->name ? $guru->user->name : $user->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tempat">Tempat Lahir :</label>
            <input type="text" name="tempat" value="{{ $guru->tempat_lahir }}" class="form-control" id="tempat"
                required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal Lahir :</label>
            <input type="text" name="tanggal" value="{{ $guru->tanggal_lahir }}" class="form-control"
                id="tanggal" required>
        </div>
        <div class="form-group">
            <label for="pendidikan">Pendidikan :</label>
            <input type="text" name="pendidikan" value="{{ $guru->pendidikan }}" class="form-control"
                id="pendidikan" required>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan :</label>
            <input type="text" name="jabatan" value="{{ $guru->jabatan->nama_jabatan }}" class="form-control"
                id="jabatan" required>
        </div>

        <div class="form-group">
            <label for="no_hp">No HP :</label>
            <input type="text" name="no_hp" value="{{ $guru->no_hp }}" class="form-control" id="no_hp"
                required>
        </div>

        <div class="form-group">
            <label for="foto">Foto :</label><br>
            <img style="object-fit: contain" src="/storage/{{ $guru->image }}" alt="guru" width="150"
                height="150">
            <input type="file" name="image" class="form-control mt-2" id="foto">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat :</label>
            <textarea type="text" rows="4" name="alamat" class="form-control" id=" alamat" required>{{ $guru->alamat }}
                </textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="history.back()"> Kembali</button>
        @hasanyrole('Admin|Guru')
            <input type="submit" class="btn btn-primary btn-send" value="Simpan">
        @endhasanyrole
    </div>
</form>
@endsection
