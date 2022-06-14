<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Laporan Siswa</title>
    <style>
        .header {
            display: flex;
            position: relative;
            justify-content: space-between;
            width: 100%;
            align-items: center;
            margin-left: 100px;
        }

        .text {
            margin-left: 180px;
            margin-top: -100px;
        }

        hr {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="asset/img/foto.jpg" alt="logo_kampus" width="150px" height="100px">
        <div class="text">
            <h2>Sistem Informasi Paud</h2>
            <p>Jl. Kenangan</p>
            <p>Email : sisteminformasipaud@gmail.com Fax :202020</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <h5 class="text-center">
            Laporan Siswa
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <table class="table table-striped table-bordered align-items-center" width="100%" cellspacing="0">
            <thead>
                <tr align="center">
                    <th width="2%">No</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Nis</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>No HP</th>
                    {{-- <th>Aksi</th> --}}
                    {{-- <th>Tanggal Masuk</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $r)
                    <tr>
                        <td width="2%">{{ $loop->iteration }}</td>
                        <td>{{ $r->nama_siswa }}</td>
                        <td>{{ $r->user->email }}</td>
                        <td>{{ $r->nis }}</td>
                        <td>{{ $r->jenis_kelamin }}</td>
                        <td>{{ $r->kelas->nama_kelas }}</td>
                        <td>{{ $r->no_hp }}</td>
                        {{-- looping total obat --}}

                        {{-- <td> @foreach ($r->rawatinap->obat as $o)
                        - {{$o->nama_obat}} <br> @currency($o->harga_obat) <br>
                        @endforeach
                    </td>
                    <td>@currency($r->rawatinap->ruangan->tarif_perhari)</td>
                    <td> x {{$r->jumlah_hari}}</td>
                    <td>
                        @currency($r->rawatinap->dokter->tarif + $r->rawatinap->obat->sum('harga_obat') + ($r->rawatinap->ruangan->tarif_perhari * $r->jumlah_hari))
                    </td> --}} --}}

                        {{-- <td align="center" width="15%">

                        <a href="{{route('cetak' ,[$r->id])}}"
                            data-toggle="tooltip" title="Print"  class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                            <i class="fas fa-print fa-sm text-white-50"></i>
                        </a>
                        <a href="/transaksi/hapus/{{ $r->id }}"
                            data-toggle="tooltip" title="Hapus" onclick="return confirm('Yakin Ingin menghapus data?')"
                            class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                            <i class="fas fa-trash-alt fa-sm text-white-50"></i>
                        </a>
                    </td> --}}
                        {{-- @endforeach --}}
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>
{{-- @endsection --}}
