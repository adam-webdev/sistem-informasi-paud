@extends('layouts.layout')
@section('content')
    @include('sweetalert::alert')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Guru</h1>
        <!-- Button trigger modal -->
        @role('Admin')
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                + Tambah
            </button>
        @endrole
    </div>
    <!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="user_id">Nama Guru :</label>
                            <select name="user_id" class="form-control" required id="user_id">
                                <option value="">-- Pilih Nama Guru --</option>
                                @foreach ($user as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Jabatan">Jabatan :</label>
                            <select name="jabatan_id" class="form-control" required id="Jabatan">
                                <option value="">-- Pilih Jabatan --</option>
                                @foreach ($jabatan as $jabatan)
                                    <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap :</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" required>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir :</label>
                            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" required>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir :</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required>
                        </div>

                        <div class="form-group">
                            <label for="no_hp">No HP :</label>
                            <input type="number" name="no_hp" class="form-control" id="no_hp" required>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan :</label>
                            <input type="text" name="pendidikan" class="form-control" id="pendidikan" required>
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto :</label>
                            <input type="file" name="image" class="form-control" id="foto" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat :</label>
                            <textarea type="text" name="alamat" rows="4" class="form-control" id="alamat" required></textarea>
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
                            <th>Nama Guru</th>
                            <th>Pendidikan</th>
                            <th>No HP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guru as $guru)
                            <tr align="center">
                                <td>{{ $loop->iteration }}</td>
                                <td><img style="object-fit: contain" src="/storage/{{ $guru->image }}" width="150px"
                                        height="150px" alt="foto guru">
                                </td>
                                <td>{{ $guru->nama_lengkap }}</td>
                                <td>{{ $guru->pendidikan }}</td>
                                <td>{{ $guru->no_hp }}</td>
                                <td align="center" width="10%">
                                    <a href="{{ route('guru.edit', [$guru->id]) }}" data-toggle="tooltip" title="Edit"
                                        class="d-none  d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                        <i class="fas fa-edit fa-sm text-white-50"></i>
                                    </a>
                                    <a href="{{ route('guru.show', [$guru->id]) }}" data-toggle="tooltip" title="Detail"
                                        class="d-none  d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                        <i class="fas fa-eye fa-sm text-white-50"></i>
                                    </a>
                                    <a href="/guru/hapus/{{ $guru->id }}" data-toggle="tooltip" title="Hapus"
                                        onclick="return confirm(' Yakin Ingin menghapus data?')"
                                        class="d-none mt-1 d-sm-inline-block btn btn-sm btn-danger shadow-sm">
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
