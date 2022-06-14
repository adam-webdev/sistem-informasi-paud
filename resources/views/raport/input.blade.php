@extends('layouts.layout')
@section('content')
    @include('sweetalert::alert')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Raport</h1>
        <!-- Button trigger modal -->

    </div>
    <!-- Modal -->


    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Raport</h5>

        </div>
        <form action="{{ route('raport.store') }}" method="POST">
            @csrf
            {{-- $absensi->hadir = $request->hadir;
                    $absensi->izin = $request->izin;
                    $absensi->sakit = $request->sakit;
                    $absensi->siswa_id = $request->siswa_id;
                    $absensi->tahunajaran_id = $request->tahunajaran_id;
                    $absensi->jadwal_id = $request->jadwal_id; --}}
            <div class="modal-body">
                <div class="form-group">
                    <label for="siswa_id">Nama Siswa :</label>
                    <select name="siswa_id" class="form-control" required id="siswa_id">
                        <option value="">-- Pilih Nama Siswa --</option>
                        @foreach ($siswa as $siswa)
                            <option value="{{ $siswa->id }}">{{ $siswa->nama_siswa }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="siswa_id">Nama Guru :</label>
                    <select name="siswa_id" class="form-control" required id="siswa_id">
                        <option value="">-- Pilih Nama Guru --</option>
                        @foreach ($guru as $guru)
                            <option value="{{ $guru->id }}">{{ $guru->nama_lengkap }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="tahun_ajaran">Tahun Ajaran :</label>
                    <select name="tahunajaran_id" class="form-control" required id="tahun_ajaran">
                        <option value="">-- Pilih Tahun Ajaran --</option>
                        @foreach ($tahunajaran as $tahunajaran)
                            <option value="{{ $tahunajaran->id }}">{{ $tahunajaran->tahun_ajaran }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="catatan">Catatan</label>
                    <textarea type="text" rows="4" name="catatan" id="tanggal" class="form-control" required></textarea>
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
                            <td><input type="radio" value=BB" name="agama_moral_a1"></td>
                            <td><input type="radio" value=MB" name="agama_moral_a1"></td>
                            <td><input type="radio" value="BSH" name="agama_moral_a1"></td>
                            <td><input type="radio" value="BSB" name="agama_moral_a1"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Mengucapkan salam dan membalas salam</td>
                            <td><input type="radio" value="BB" name="agama_moral_a2"></td>
                            <td><input type="radio" value="MB" name="agama_moral_a2"></td>
                            <td><input type="radio" value="BSH" name="agama_moral_a2"></td>
                            <td><input type="radio" value="BSB" name="agama_moral_a2"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Mengenal perilaku sopan dan buruk </td>
                            <td><input type="radio" value="BB" name="agama_moral_a3"></td>
                            <td><input type="radio" value="MB" name="agama_moral_a3"></td>
                            <td><input type="radio" value="BSH" name="agama_moral_a3"></td>
                            <td><input type="radio" value="BSB" name="agama_moral_a3"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Mengucapkan doa sebelum dan sesudah melakukan sesuatu</td>
                            <td><input type="radio" value="BB" name="agama_moral_a4"></td>
                            <td><input type="radio" value="MB" name="agama_moral_a4"></td>
                            <td><input type="radio" value="BSH" name="agama_moral_a4"></td>
                            <td><input type="radio" value="BSB" name="agama_moral_a4"></td>
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
                            <td><input type="radio" value="BB" name="fisik_motorik_a1"></td>
                            <td><input type="radio" value="MB" name="fisik_motorik_a1"></td>
                            <td><input type="radio" value="BSH" name="fisik_motorik_a1"></td>
                            <td><input type="radio" value="BSB" name="fisik_motorik_a1"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Menjiplak bentuk</td>
                            <td><input type="radio" value="BB" name="fisik_motorik_a2"></td>
                            <td><input type="radio" value="MB" name="fisik_motorik_a2"></td>
                            <td><input type="radio" value="BSH" name="fisik_motorik_a2"></td>
                            <td><input type="radio" value="BSB" name="fisik_motorik_a2"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Mengkoordinasikan mata dan tangan untuk melakukan gerakan yang rumit</td>
                            <td><input type="radio" value="BB" name="fisik_motorik_a3"></td>
                            <td><input type="radio" value="MB" name="fisik_motorik_a3"></td>
                            <td><input type="radio" value="BSH" name="fisik_motorik_a3"></td>
                            <td><input type="radio" value="BSB" name="fisik_motorik_a3"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="font-weight: 700" class="text-bold">B. Motorik Kasar</td>

                        </tr>
                        <tr>
                            <td></td>
                            <td>Melakukan gerakan melompat,meloncat, dan berlari secara terkoordinasi</td>
                            <td><input type="radio" value="BB" name="fisik_motorik_b1"></td>
                            <td><input type="radio" value="MB" name="fisik_motorik_b1"></td>
                            <td><input type="radio" value="BSH" name="fisik_motorik_b1"></td>
                            <td><input type="radio" value="BSB" name="fisik_motorik_b1"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Melakukan gerakan menggantung (Misal,Bergelayut)</td>
                            <td><input type="radio" value="BB" name="fisik_motorik_b2"></td>
                            <td><input type="radio" value="MB" name="fisik_motorik_b2"></td>
                            <td><input type="radio" value="BSH" name="fisik_motorik_b2"></td>
                            <td><input type="radio" value="BSB" name="fisik_motorik_b2"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Melempar sesuatu secara terarah</td>
                            <td><input type="radio" value="BB" name="fisik_motorik_b3"></td>
                            <td><input type="radio" value="MB" name="fisik_motorik_b3"></td>
                            <td><input type="radio" value="BSH" name="fisik_motorik_b3"></td>
                            <td><input type="radio" value="BSB" name="fisik_motorik_b3"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Menangkap sesuatu secara tepat</td>
                            <td><input type="radio" value="BB" name="fisik_motorik_b4"></td>
                            <td><input type="radio" value="MB" name="fisik_motorik_b4"></td>
                            <td><input type="radio" value="BSH" name="fisik_motorik_b4"></td>
                            <td><input type="radio" value="BSB" name="fisik_motorik_b4"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Melakukan gerakan antipasi </td>
                            <td><input type="radio" value="BB" name="fisik_motorik_b5"></td>
                            <td><input type="radio" value="MB" name="fisik_motorik_b5"></td>
                            <td><input type="radio" value="BSH" name="fisik_motorik_b5"></td>
                            <td><input type="radio" value="BSB" name="fisik_motorik_b5"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Menendang sesuatu secara terarah </td>
                            <td><input type="radio" value="BB" name="fisik_motorik_b6"></td>
                            <td><input type="radio" value="MB" name="fisik_motorik_b6"></td>
                            <td><input type="radio" value="BSH" name="fisik_motorik_b6"></td>
                            <td><input type="radio" value="BSB" name="fisik_motorik_b6"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Memanfaatkan alat permainan di luar kelas</td>
                            <td><input type="radio" value="BB" name="fisik_motorik_b7"></td>
                            <td><input type="radio" value="MB" name="fisik_motorik_b7"></td>
                            <td><input type="radio" value="BSH" name="fisik_motorik_b7"></td>
                            <td><input type="radio" value="BSB" name="fisik_motorik_b7"></td>
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
                            <td><input type="radio" value="BB" name="kognitif_a1"></td>
                            <td><input type="radio" value="MB" name="kognitif_a1"></td>
                            <td><input type="radio" value="BSH" name="kognitif_a1"></td>
                            <td><input type="radio" value="BSB" name="kognitif_a1"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td> Mengklasifikasikan benda berdasarkan fungsi,bentuk atau warna ukuran
                            </td>
                            <td><input type="radio" value="BB" name="kognitif_a2"></td>
                            <td><input type="radio" value="MB" name="kognitif_a2"></td>
                            <td><input type="radio" value="BSH" name="kognitif_a2"></td>
                            <td><input type="radio" value="BSB" name="kognitif_a2"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td> Mengklasifikasikan benda berdasarkan fungsi,bentuk atau warna ukuran
                            </td>
                            <td><input type="radio" value="BB" name="kognitif_a3"></td>
                            <td><input type="radio" value="MB" name="kognitif_a3"></td>
                            <td><input type="radio" value="BSH" name="kognitif_a3"></td>
                            <td><input type="radio" value="BSB" name="kognitif_a3"></td>
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
                            <td><input type="radio" value="BB" name="bahasa_a1"></td>
                            <td><input type="radio" value="MB" name="bahasa_a1"></td>
                            <td><input type="radio" value="BSH" name="bahasa_a1"></td>
                            <td><input type="radio" value="BSB" name="bahasa_a1"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Memahami cerita yang dibacakan
                            </td>
                            <td><input type="radio" value="BB" name="bahasa_a2"></td>
                            <td><input type="radio" value="MB" name="bahasa_a2"></td>
                            <td><input type="radio" value="BSH" name="bahasa_a2"></td>
                            <td><input type="radio" value="BSB" name="bahasa_a2"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Bertanya dengan kalimat yang benar

                            </td>
                            <td><input type="radio" value="BB" name="bahasa_a3"></td>
                            <td><input type="radio" value="MB" name="bahasa_a3"></td>
                            <td><input type="radio" value="BSH" name="bahasa_a3"></td>
                            <td><input type="radio" value="BSB" name="bahasa_a3"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Mengungkapkan perasaan dengan kata sifat (baik,senang,nakal,pelit,dsb)


                            </td>
                            <td><input type="radio" value="BB" name="bahasa_a4"></td>
                            <td><input type="radio" value="MB" name="bahasa_a4"></td>
                            <td><input type="radio" value="BSH" name="bahasa_a4"></td>
                            <td><input type="radio" value="BSB" name="bahasa_a4"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Membuat coretan yang bermakna
                            </td>
                            <td><input type="radio" value="BB" name="bahasa_a5"></td>
                            <td><input type="radio" value="MB" name="bahasa_a5"></td>
                            <td><input type="radio" value="BSH" name="bahasa_a5"></td>
                            <td><input type="radio" value="BSB" name="bahasa_a5"></td>
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
                            <td><input type="radio" value="BB" name="sosial_emosional_a1"></td>
                            <td><input type="radio" value="MB" name="sosial_emosional_a1"></td>
                            <td><input type="radio" value="BSH" name="sosial_emosional_a1"></td>
                            <td><input type="radio" value="BSB" name="sosial_emosional_a1"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Menunjukan rasa percaya diri
                            </td>
                            <td><input type="radio" value="BB" name="sosial_emosional_a2"></td>
                            <td><input type="radio" value="MB" name="sosial_emosional_a2"></td>
                            <td><input type="radio" value="BSH" name="sosial_emosional_a2"></td>
                            <td><input type="radio" value="BSB" name="sosial_emosional_a2"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Memahami peraturan dan disiplin
                            </td>
                            <td><input type="radio" value="BB" name="sosial_emosional_a3"></td>
                            <td><input type="radio" value="MB" name="sosial_emosional_a3"></td>
                            <td><input type="radio" value="BSH" name="sosial_emosional_a3"></td>
                            <td><input type="radio" value="BSB" name="sosial_emosional_a3"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Mau berbagi,menolong dan membantu teman
                            </td>
                            <td><input type="radio" value="BB" name="sosial_emosional_a4"></td>
                            <td><input type="radio" value="MB" name="sosial_emosional_a4"></td>
                            <td><input type="radio" value="BSH" name="sosial_emosional_a4"></td>
                            <td><input type="radio" value="BSB" name="sosial_emosional_a4"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Menunjukan antusiasme dalam melakukan permainan
                            </td>
                            <td><input type="radio" value="BB" name="sosial_emosional_a5"></td>
                            <td><input type="radio" value="MB" name="sosial_emosional_a5"></td>
                            <td><input type="radio" value="BSH" name="sosial_emosional_a5"></td>
                            <td><input type="radio" value="BSB" name="sosial_emosional_a5"></td>
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
                            <td><input type="radio" value="BB" name="seni_a1"></td>
                            <td><input type="radio" value="MB" name="seni_a1"></td>
                            <td><input type="radio" value="BSH" name="seni_a1"></td>
                            <td><input type="radio" value="BSB" name="seni_a1"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Tertarik dengan kegiatan seni

                            </td>
                            <td><input type="radio" value="BB" name="seni_a2"></td>
                            <td><input type="radio" value="MB" name="seni_a2"></td>
                            <td><input type="radio" value="BSH" name="seni_a2"></td>
                            <td><input type="radio" value="BSB" name="seni_a2"></td>
                        </tr>
                    </tbody>

                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button>
                <input type="submit" class="btn btn-primary btn-send" value="Simpan">
            </div>
        </form>
    </div>
@endsection
