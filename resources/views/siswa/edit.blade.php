@extends('layouts.layout')
@section('content')
    @include('sweetalert::alert')

    <!-- Modal -->

    <h5 class="modal-title" id="exampleModalLabel">Edit Data Siswa</h5>

    <form action="{{ route('siswa.update', [$siswa->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="user_id">User ID :</label>
                <select name="user_id" class="form-control" required id="user_id">
                    @foreach ($user as $user)
                        <option value="{{ $user->id }}" {{ $siswa->user->id === $user->id ? 'selected' : '' }}>
                            {{ $siswa->user->id === $user->id ? $siswa->user->id : $user->id }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama">Nama Siswa :</label>
                <input type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}" class="form-control" id="nama"
                    required>
            </div>
            <div class="form-group">
                <label for="nis">Nis :</label>
                <input type="text" name="nis" value="{{ $siswa->nis }}" class="form-control" id="nis" required>
            </div>
            <div class="form-group">
                <label for="kelas_id">Kelas :</label>
                <select name="kelas_id" class="form-control" required id="kelas_id">
                    @foreach ($kelas as $kelas)
                        <option value="{{ $kelas->id }}" {{ $siswa->kelas->id === $kelas->id ? 'selected' : '' }}>
                            {{ $siswa->kelas->nama_kelas === $kelas->nama_kelas ? $siswa->kelas->nama_kelas : $kelas->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jk">Jenis Kelamin :</label>
                <select name="jenis_kelamin" class="form-control" required id="jk">
                    <option value="{{ $siswa->jenis_kelamin }}"
                        {{ $siswa->jenis_kelamin === 'Laki Laki' ? 'selected' : '' }}">
                        Laki Laki
                    <option value="{{ $siswa->jenis_kelamin }}"
                        {{ $siswa->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>
                        Perempuan </option>
                </select>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir :</label>
                <input type="text" name="tempat_lahir" value="{{ $siswa->tempat_lahir }}" class="form-control" id="ttl"
                    required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir :</label>
                <input type="text" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" class="form-control"
                    id="ttl" required>
            </div>
            <div class="form-group">
                <label for="agama">Agama :</label>
                <input type="text" name="agama" value="{{ $siswa->agama }}" class="form-control" id="agama" required>
            </div>
            <div class="form-group">
                <label for="nama_ibu">Nama Ibu :</label>
                <input type="text" name="nama_ibu" value="{{ $siswa->nama_ibu }}" class="form-control" id="nama_ibu"
                    required>
            </div>
            <div class="form-group">
                <label for="nama_ayah">Nama Ayah :</label>
                <input type="text" name="nama_ayah" value="{{ $siswa->nama_ayah }}" class="form-control" id="nama_ibu"
                    required>
            </div>
            <div class="form-group">
                <label for="no_hp">No HP :</label>
                <input type="text" name="no_hp" value="{{ $siswa->no_hp }}" class="form-control" id="no_hp" required>
            </div>
            <div class="form-group">
                <label for="foto">Foto :</label><br>
                <img style="object-fit: contain" src="/storage/{{ $siswa->image }}" alt="guru" width="150" height="150">
                <input type="file" name="image" class="form-control mt-2" id="foto">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <textarea type="text" rows="4" name="alamat" class="form-control" id=" alamat" required>{{ $siswa->alamat }}
                </textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button>
            <input type="submit" class="btn btn-primary btn-send" value="Simpan">
        </div>
    </form>
@endsection
