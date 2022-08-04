<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Raport</title>
    <style type="text/css" media="all">
        body .header {
            display: flex;
            /* position: relative; */
            justify-content: space-between;
            width: 100%;
            align-items: center;
            /* margin-left: 30px; */
        }

        .text {
            margin-top: 20px;
        }

        hr {
            margin-bottom: 30px;
        }

        .nama {
            display: flex;
        }

        .box {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="asset/img/logo.jpg" alt="logo_rm" width="150px" height="150px"
            style="border-radius:50%; object-fit:cover">
        <div class="text">
            <h4>Laporan Penilaian Perkembangan Anak Didik Paud Berkah</h4>
            <p>Jl. Kenangan</p>
            <p>Email : paudberkah@gmail.com Fax :202020</p>
        </div>
    </div>
    <hr>
    <div class="row">
        {{-- <h5 class="text-center">
            {{ $periode2 == 'all' ? 'Laporan barang rusak ' : 'Laporan barang rusak Periode ' . $tgl_awal2 . ' sampai dengan ' . $tgl_akhir2 }}
        </h5> --}}
    </div>
    <div class="box">
        <div class="left">

            <p>Nama : <b> {{ $raport->siswa->nama_siswa }} </b></p>
            <p>NIS : <b> {{ $raport->siswa->nis }} </b></p>
            <p>Semester : <b> {{ $raport->tahunajaran->semester }} </b></p>
            <p>Tahun Ajaran : <b> {{ $raport->tahunajaran->tahun_ajaran }} </b></p>
        </div>
        <div class="right">

            <p>Izin : <b> {{ $data['izin'] }} </b></p>
            <p>Sakit : <b> {{ $data['sakit'] }} </b></p>
            {{-- <p>NIS : <b> {{ $raport->siswa->nis }} </b></p>
            <p>Semester : <b> {{ $raport->tahunajaran->semester }} </b></p>
            <p>Tahun Ajaran : <b> {{ $raport->tahunajaran->tahun_ajaran }} </b></p> --}}
        </div>

        {{-- <h2>NIS : {{ $raport->siswa->nis }}</h2>
            <h2>Semester : {{ $raport->tahunajaran->semester }}</h2>
            <h2>Tahun Ajaran : {{ $raport->tahunajaran->tahun_ajaran }}</h2> --}}


        {{-- <table class="table table-striped table-bordered align-items-center" width="100%" cellspacing="0">
            <thead>
                <tr align="center">
                    <th width="2%">No</th>
                    <th>Tanggal</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang </th>
                    <th>Harga Barang</th>
                    <th>Aksi</th>
                    <th>Tanggal Masuk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data2 as $r)
                    <tr>
                        <td width="2%">{{ $loop->iteration }}</td>
                        <td>{{ $r->created_at->format('Y-m-d H:i:s') }}</td>
                        <td>{{ $r->barang->kode_barang }}</td>
                        <td>{{ $r->barang->nama_barang }}</td>
                        <td>{{ $r->jumlah }}</td>
                        <td>@currency($r->barang->harga_barang) </td>

                    </tr>
                @endforeach

            </tbody>
        </table> --}}
    </div>
    <hr>
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
                <td><input type="radio" {{ $raport->agama_moral_a3 === 'BSH' ? 'checked' : '' }} value="BSH"
                        name="agama_moral_a3"></td>
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
                <td><input type="radio" value="BSH" {{ $raport->agama_moral_a4 === 'BSH' ? 'checked' : '' }}
                        name="agama_moral_a4"></td>
                <td><input type="radio" value="BSB" {{ $raport->agama_moral_a4 === 'BSB' ? 'checked' : '' }}
                        name="agama_moral_a4"></td>
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
                        {{ $raport->fisik_motorik_b2 === 'BB' ? 'checked' : '' }}></td>
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
</body>

</html>
{{-- @endsection --}}
