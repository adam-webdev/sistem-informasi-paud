@extends('layouts.layout')
@section('content')
    @include('sweetalert::alert')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Siswa</h1>
        <!-- Button trigger modal -->
        @role('Admin')
            <div>
                <a href="{{ route('laporan.siswa') }}" class="btn btn-success">Print <span
                        class=" fas fa-fw
            fa-file-pdf"></span></a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    + Tambah
                </button>
            </div>
        @endrole
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="user_id">Nama User :</label>
                            <select name="user_id" class="form-control" required id="user_id">
                                <option value="">-- Pilih Nama User --</option>
                                @foreach ($user as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas :</label>
                            <select name="kelas_id" class="form-control" required id="kelas">
                                <option value="">-- Pilih Kelas --</option>
                                @foreach ($kelas as $kelas)
                                    <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="namas">Nama Siswa :</label>
                            <input type="text" name="nama_siswa" class="form-control" id="namas" required>
                        </div>
                        <div class="form-group">
                            <label for="nis">Nis :</label>
                            <input type="text" name="nis" class="form-control" id="nis" required>
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin :</label>
                            <select name="jenis_kelamin" class="form-control" required id="jk">
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat Lahir :</label>
                            <input type="text" name="tempat_lahir" class="form-control" id="tempat" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal Lahir :</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama :</label>
                            <input type="text" name="agama" class="form-control" id="agama" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_ibu">Nama Ibu :</label>
                            <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_ayah">Nama Ayah :</label>
                            <input type="text" name="nama_ayah" class="form-control" id="nama_ibu" required>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP :</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" required>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto :</label>
                            <input type="file" name="image" class="form-control" id="foto" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat :</label>
                            <textarea type="text" name="alamat" rows="4" class="form-control" id="alamat" required>
                            </textarea>
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
                            <th>Foto</th>
                            <th>Nama Siswa</th>
                            <th>NIS</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $siswa)
                            <tr align="center">
                                <td>{{ $loop->iteration }}</td>
                                <td><img style="object-fit: contain" src="/storage/{{ $siswa->image }}" width="150px"
                                        height="150px" alt="foto siswa">
                                </td>
                                <td>{{ $siswa->nama_siswa }}</td>
                                <td>{{ $siswa->nis }}</td>
                                <td>{{ $siswa->jenis_kelamin }}</td>

                                <td align="center" width="10%">
                                    <a href="{{ route('siswa.edit', [$siswa->id]) }}" data-toggle="tooltip" title="Edit"
                                        class="d-none  d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                        <i class="fas fa-edit fa-sm text-white-50"></i>
                                    </a>
                                    <a href="{{ route('siswa.show', [$siswa->id]) }}" data-toggle="tooltip" title="Edit"
                                        class="d-none  d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                        <i class="fas fa-eye fa-sm text-white-50"></i>
                                    </a>
                                    <a href="/siswa/hapus/{{ $siswa->id }}" data-toggle="tooltip" title="Hapus"
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
