@extends('layouts.layout')
@section('content')
@section('title', 'Edit Raport')

@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Raport <b>{{ $raport->siswa->nama_siswa }}</b> </h1>
    <!-- Button trigger modal -->

</div>
<!-- Modal -->


<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Raport</h5>

    </div>
    <form action="{{ route('raport.update', [$raport->id]) }}" method="POST">
        @csrf
        <div class="modal-body">
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="siswa_id">Nama Siswa :</label>
                <select name="siswa_id" class="form-control" required id="siswa_id">
                    @foreach ($siswa as $siswa)
                        <option value="{{ $siswa->id }}" {{ $raport->siswa->id === $siswa->id ? 'selected' : '' }}>
                            {{ $raport->siswa->nama_siswa === $siswa->nama_siswa ? $raport->siswa->nama_siswa : $siswa->nama_siswa }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="guru_id">Nama Guru :</label>
                <select name="guru_id" class="form-control" required id="guru_id">
                    @foreach ($guru as $guru)
                        <option value="{{ $guru->id }}" {{ $raport->guru->id === $guru->id ? 'selected' : '' }}>
                            {{ $raport->guru->nama_lengkap === $guru->nama_lengkap ? $raport->guru->nama_lengkap : $guru->nama_lengkap }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="tahun_ajaran">Tahun Ajaran :</label>
                <select name="tahunajaran_id" class="form-control" required id="tahun_ajaran">
                    @foreach ($tahunajaran as $tahunajaran)
                        <option value="{{ $tahunajaran->id }}"
                            {{ $raport->tahunajaran->id === $tahunajaran->id ? 'selected' : '' }}>
                            {{ $raport->tahunajaran->tahun_ajaran === $tahunajaran->tahun_ajaran ? $raport->tahunajaran->tahun_ajaran : $tahunajaran->tahun_ajaran }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="catatan">Catatan</label>
                <textarea type="text" rows="4" name="catatan" id="tanggal" class="form-control" required>{{ $raport->catatan }}</textarea>
            </div>

        </div>
        <div class="row mx-2">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr class="bg-primary text-white text-bold">
                        <td>No</td>
                        <td>Aspek Penilaian</td>
                        <td colspan="5">Kualitas</td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-dark text-white">
                        <td>1</td>
                        <td>Agama</td>
                        <td>BB</td>
                        <td>MB</td>
                        <td>BSH</td>
                        <td>BSB</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Mengetahui agama yang dianutnya</td>
                        <td><input type="radio" value="BB" name="agama_moral_a1" required
                                {{ $raport->agama_moral_a1 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value=MB" name="agama_moral_a1"
                                {{ $raport->agama_moral_a1 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="agama_moral_a1"
                                {{ $raport->agama_moral_a1 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="agama_moral_a1"
                                {{ $raport->agama_moral_a1 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Mengucapkan salam dan membalas salam</td>
                        <td><input type="radio" value="BB" name="agama_moral_a2" required
                                {{ $raport->agama_moral_a2 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="agama_moral_a2"
                                {{ $raport->agama_moral_a2 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="agama_moral_a2"
                                {{ $raport->agama_moral_a2 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="agama_moral_a2"
                                {{ $raport->agama_moral_a2 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Mengenal perilaku sopan dan buruk </td>
                        <td><input type="radio" value="BB" name="agama_moral_a3" required
                                {{ $raport->agama_moral_a3 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="agama_moral_a3"
                                {{ $raport->agama_moral_a3 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" {{ $raport->agama_moral_a3 === 'BSH' ? 'checked' : '' }}
                                value="BSH" name="agama_moral_a3"></td>
                        <td><input type="radio" value="BSB" name="agama_moral_a3"
                                {{ $raport->agama_moral_a3 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Mengucapkan doa sebelum dan sesudah melakukan sesuatu</td>
                        <td><input type="radio" value="BB" name="agama_moral_a4"
                                {{ $raport->agama_moral_a4 === 'BB' ? 'checked' : '' }} required></td>
                        <td><input type="radio" value="MB" name="agama_moral_a4"
                                {{ $raport->agama_moral_a4 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH"
                                {{ $raport->agama_moral_a4 === 'BSH' ? 'checked' : '' }} name="agama_moral_a4"></td>
                        <td><input type="radio" value="BSB"
                                {{ $raport->agama_moral_a4 === 'BSB' ? 'checked' : '' }} name="agama_moral_a4"></td>
                    </tr>
                    <tr class="bg-dark text-white">
                        <td>2</td>
                        <td>Fisik Motorik</td>
                        <td>BB</td>
                        <td>MB</td>
                        <td>BSH</td>
                        <td>BSB</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="font-weight: 700" class="text-bold">A. Motorik Halus</td>

                    </tr>
                    <tr>
                        <td></td>
                        <td>Membuat garis vertikal, horizontal, lengkung kiri/kanan, miring dan lingkaran</td>
                        <td><input type="radio" value="BB" name="fisik_motorik_a1" required
                                {{ $raport->fisik_motorik_a1 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="fisik_motorik_a1"
                                {{ $raport->fisik_motorik_a1 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="fisik_motorik_a1"
                                {{ $raport->fisik_motorik_a1 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="fisik_motorik_a1"
                                {{ $raport->fisik_motorik_a1 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Menjiplak bentuk</td>
                        <td><input type="radio" value="BB" name="fisik_motorik_a2" required
                                {{ $raport->fisik_motorik_a2 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="fisik_motorik_a2"
                                {{ $raport->fisik_motorik_a2 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="fisik_motorik_a2"
                                {{ $raport->fisik_motorik_a2 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="fisik_motorik_a2"
                                {{ $raport->fisik_motorik_a2 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Mengkoordinasikan mata dan tangan untuk melakukan gerakan yang rumit</td>
                        <td><input type="radio" value="BB" name="fisik_motorik_a3" required
                                {{ $raport->fisik_motorik_a3 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="fisik_motorik_a3"
                                {{ $raport->fisik_motorik_a3 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="fisik_motorik_a3"
                                {{ $raport->fisik_motorik_a3 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="fisik_motorik_a3"
                                {{ $raport->fisik_motorik_a3 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="font-weight: 700" class="text-bold">B. Motorik Kasar</td>

                    </tr>
                    <tr>
                        <td></td>
                        <td>Melakukan gerakan melompat,meloncat, dan berlari secara terkoordinasi</td>
                        <td><input type="radio" value="BB" name="fisik_motorik_b1" required
                                {{ $raport->fisik_motorik_b1 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="fisik_motorik_b1"
                                {{ $raport->fisik_motorik_b1 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="fisik_motorik_b1"
                                {{ $raport->fisik_motorik_b1 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="fisik_motorik_b1"
                                {{ $raport->fisik_motorik_b1 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Melakukan gerakan menggantung (Misal,Bergelayut)</td>
                        <td><input type="radio" value="BB" name="fisik_motorik_b2" required
                                {{ $raport->fisik_motorik_b2 === 'BB' ? 'checked' : '' }}>></td>
                        <td><input type="radio" value="MB" name="fisik_motorik_b2"
                                {{ $raport->fisik_motorik_b2 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="fisik_motorik_b2"
                                {{ $raport->fisik_motorik_b2 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="fisik_motorik_b2"
                                {{ $raport->fisik_motorik_b2 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Melempar sesuatu secara terarah</td>
                        <td><input type="radio" value="BB" name="fisik_motorik_b3" required
                                {{ $raport->fisik_motorik_b3 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="fisik_motorik_b3"
                                {{ $raport->fisik_motorik_b3 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="fisik_motorik_b3"
                                {{ $raport->fisik_motorik_b3 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="fisik_motorik_b3"
                                {{ $raport->fisik_motorik_b3 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Menangkap sesuatu secara tepat</td>
                        <td><input type="radio" value="BB" name="fisik_motorik_b4" required
                                {{ $raport->fisik_motorik_b4 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="fisik_motorik_b4"
                                {{ $raport->fisik_motorik_b4 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="fisik_motorik_b4"
                                {{ $raport->fisik_motorik_b4 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="fisik_motorik_b4"
                                {{ $raport->fisik_motorik_b4 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Melakukan gerakan antipasi </td>
                        <td><input type="radio" value="BB" name="fisik_motorik_b5" required
                                {{ $raport->fisik_motorik_b5 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="fisik_motorik_b5"
                                {{ $raport->fisik_motorik_b5 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="fisik_motorik_b5"
                                {{ $raport->fisik_motorik_b5 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="fisik_motorik_b5"
                                {{ $raport->fisik_motorik_b5 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Menendang sesuatu secara terarah </td>
                        <td><input type="radio" value="BB" name="fisik_motorik_b6" required
                                {{ $raport->fisik_motorik_b6 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="fisik_motorik_b6"
                                {{ $raport->fisik_motorik_b6 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="fisik_motorik_b6"
                                {{ $raport->fisik_motorik_b6 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="fisik_motorik_b6"
                                {{ $raport->fisik_motorik_b6 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Memanfaatkan alat permainan di luar kelas</td>
                        <td><input type="radio" value="BB" name="fisik_motorik_b7" required
                                {{ $raport->fisik_motorik_b7 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="fisik_motorik_b7"
                                {{ $raport->fisik_motorik_b7 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="fisik_motorik_b7"
                                {{ $raport->fisik_motorik_b7 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="fisik_motorik_b7"
                                {{ $raport->fisik_motorik_b7 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>

                    <tr class="bg-dark text-white">
                        <td>3</td>
                        <td>Kognitif</td>
                        <td>BB</td>
                        <td>MB</td>
                        <td>BSH</td>
                        <td>BSB</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Mengenal benda berdasarkan fungsi</td>
                        <td><input type="radio" value="BB" name="kognitif_a1" required
                                {{ $raport->kognitif_a1 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="kognitif_a1"
                                {{ $raport->kognitif_a1 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="kognitif_a1"
                                {{ $raport->kognitif_a1 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="kognitif_a1"
                                {{ $raport->kognitif_a1 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> Mengklasifikasikan benda berdasarkan fungsi,bentuk atau warna ukuran
                        </td>
                        <td><input type="radio" value="BB" name="kognitif_a2" required
                                {{ $raport->kognitif_a2 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="kognitif_a2"
                                {{ $raport->kognitif_a2 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="kognitif_a2"
                                {{ $raport->kognitif_a2 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="kognitif_a2"
                                {{ $raport->kognitif_a2 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> Mengklasifikasikan benda berdasarkan fungsi,bentuk atau warna ukuran
                        </td>
                        <td><input type="radio" value="BB" name="kognitif_a3" required
                                {{ $raport->kognitif_a3 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="kognitif_a3"
                                {{ $raport->kognitif_a3 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="kognitif_a3"
                                {{ $raport->kognitif_a3 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="kognitif_a3"
                                {{ $raport->kognitif_a3 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>

                    <tr class="bg-dark text-white">
                        <td>4</td>
                        <td>Bahasa</td>
                        <td>BB</td>
                        <td>MB</td>
                        <td>BSH</td>
                        <td>BSB</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> Menyimak perkataan orang lain (Misal, Bahasa ibu atau bahasa lainnya)

                        </td>
                        <td><input type="radio" value="BB" name="bahasa_a1" required
                                {{ $raport->bahasa_a1 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="bahasa_a1"
                                {{ $raport->bahasa_a1 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="bahasa_a1"
                                {{ $raport->bahasa_a1 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="bahasa_a1"
                                {{ $raport->bahasa_a1 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Memahami cerita yang dibacakan
                        </td>
                        <td><input type="radio" value="BB" name="bahasa_a2" required
                                {{ $raport->bahasa_a2 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="bahasa_a2"
                                {{ $raport->bahasa_a2 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="bahasa_a2"
                                {{ $raport->bahasa_a2 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="bahasa_a2"
                                {{ $raport->bahasa_a2 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Bertanya dengan kalimat yang benar

                        </td>
                        <td><input type="radio" value="BB" name="bahasa_a3" required
                                {{ $raport->bahasa_a3 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="bahasa_a3"
                                {{ $raport->bahasa_a3 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="bahasa_a3"
                                {{ $raport->bahasa_a3 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="bahasa_a3"
                                {{ $raport->bahasa_a3 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Mengungkapkan perasaan dengan kata sifat (baik,senang,nakal,pelit,dsb)


                        </td>
                        <td><input type="radio" value="BB" name="bahasa_a4" required
                                {{ $raport->bahasa_a4 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="bahasa_a4"
                                {{ $raport->bahasa_a4 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="bahasa_a4"
                                {{ $raport->bahasa_a4 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="bahasa_a4"
                                {{ $raport->bahasa_a4 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Membuat coretan yang bermakna
                        </td>
                        <td><input type="radio" value="BB" name="bahasa_a5" required
                                {{ $raport->bahasa_a5 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="bahasa_a5"
                                {{ $raport->bahasa_a5 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="bahasa_a5"
                                {{ $raport->bahasa_a5 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="bahasa_a5"
                                {{ $raport->bahasa_a5 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr class="bg-dark text-white">
                        <td>4</td>
                        <td>Sosial Emosional</td>
                        <td>BB</td>
                        <td>MB</td>
                        <td>BSH</td>
                        <td>BSB</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Menunjukan sikap mandiri dalam memilih kegiatan

                        </td>
                        <td><input type="radio" value="BB" name="sosial_emosional_a1" required
                                {{ $raport->sosial_emosional_a1 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="sosial_emosional_a1"
                                {{ $raport->sosial_emosional_a1 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="sosial_emosional_a1"
                                {{ $raport->sosial_emosional_a1 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="sosial_emosional_a1"
                                {{ $raport->sosial_emosional_a1 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Menunjukan rasa percaya diri
                        </td>
                        <td><input type="radio" value="BB" name="sosial_emosional_a2" required
                                {{ $raport->sosial_emosional_a2 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="sosial_emosional_a2"
                                {{ $raport->sosial_emosional_a2 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="sosial_emosional_a2"
                                {{ $raport->sosial_emosional_a2 === 'BSB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="sosial_emosional_a2"
                                {{ $raport->sosial_emosional_a2 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Memahami peraturan dan disiplin
                        </td>
                        <td><input type="radio" value="BB" name="sosial_emosional_a3" required
                                {{ $raport->sosial_emosional_a3 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="sosial_emosional_a3"
                                {{ $raport->sosial_emosional_a3 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="sosial_emosional_a3"
                                {{ $raport->sosial_emosional_a3 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="sosial_emosional_a3"
                                {{ $raport->sosial_emosional_a3 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Mau berbagi,menolong dan membantu teman
                        </td>
                        <td><input type="radio" value="BB" name="sosial_emosional_a4" required
                                {{ $raport->sosial_emosional_a4 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="sosial_emosional_a4"
                                {{ $raport->sosial_emosional_a4 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="sosial_emosional_a4"
                                {{ $raport->sosial_emosional_a4 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="sosial_emosional_a4"
                                {{ $raport->sosial_emosional_a4 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Menunjukan antusiasme dalam melakukan permainan
                        </td>
                        <td><input type="radio" value="BB" name="sosial_emosional_a5" required
                                {{ $raport->sosial_emosional_a5 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="sosial_emosional_a5"
                                {{ $raport->sosial_emosional_a5 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="sosial_emosional_a5"
                                {{ $raport->sosial_emosional_a5 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="sosial_emosional_a5"
                                {{ $raport->sosial_emosional_a5 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr class="bg-dark text-white">
                        <td>5</td>
                        <td>Seni</td>
                        <td>BB</td>
                        <td>MB</td>
                        <td>BSH</td>
                        <td>BSB</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Anak mampu menikmati berbagai alunan lagu atau suara
                        </td>
                        <td><input type="radio" value="BB" name="seni_a1" required
                                {{ $raport->seni_a1 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="seni_a1"
                                {{ $raport->seni_a1 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="seni_a1"
                                {{ $raport->seni_a1 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="seni_a1"
                                {{ $raport->seni_a1 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Tertarik dengan kegiatan seni

                        </td>
                        <td><input type="radio" value="BB" name="seni_a2" required
                                {{ $raport->seni_a2 === 'BB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="MB" name="seni_a2"
                                {{ $raport->seni_a2 === 'MB' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSH" name="seni_a2"
                                {{ $raport->seni_a2 === 'BSH' ? 'checked' : '' }}></td>
                        <td><input type="radio" value="BSB" name="seni_a2"
                                {{ $raport->seni_a2 === 'BSB' ? 'checked' : '' }}></td>
                    </tr>
                </tbody>

            </table>
            <p>Catatan :</p>
            <p>BB = Belum Berkembang</p>
            <p>MB = Mulai Berkembang</p>
            <p>BSH = Berkembang Sesuai Harapan</p>
            <p>BSH = Berkembang Sangat Baik</p>

        </div>
        <div class="modal-footer">

            <input type="submit" class="btn btn-primary btn-send" value="Simpan">
        </div>
    </form>
</div>
@endsection
