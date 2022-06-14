@extends('layouts.layout')
@section('content')
@section('style')
    .box {
    border: blue;
    }

    .box:hover {
    box-shadow: 0 2 3 2 rgba(0, 0, 0, 0.3);
    }
@endsection
<div class="card">
    <h4 class="p-2">Selamat Datang <b>{{ $data }}</b></h4>
</div>

<div class="row align-items-center">
    <div class="col-md-4 ml-4">
        <img width="400px" height="400px" src="{{ asset('asset/img/company.svg') }}" alt="">
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6 box">
                <a style="text-decoration:none; color:black; hover" href="{{ route('siswa.index') }}">
                    <div class="card p-4">
                        <p style="font-weight: 700">Data Murid</p>
                        <p style="font-weight: 700; font-size:38px;">{{ $siswa }}</p>
                    </div>
                </a>
            </div>
            <div class=" col-md-6 box">
                <a style="text-decoration:none; color:black; hover" href="{{ route('guru.index') }}">
                    <div class="card p-4">
                        <p style="font-weight: 700">Data Guru</p>
                        <p style="font-weight: 700; font-size:38px;">{{ $guru }}</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 box mt-4">
                <a style="text-decoration:none; color:black; hover" href="{{ route('user.index') }}">
                    <div class="card p-4">
                        <p style="font-weight: 700">Data User</p>
                        <p style="font-weight: 700; font-size:38px;">{{ $pengguna }}</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 box mt-4">
                <a style="text-decoration:none; color:black; hover" href="{{ route('kelas.index') }}">
                    <div class="card p-4">
                        <p style="font-weight: 700">Data Kelas</p>
                        <p style="font-weight: 700; font-size:38px;">{{ $kelas }}</p>
                    </div>
                </a>
            </div>

        </div>
        {{-- <div class="row mt-4">
                <div class="col-md-4">
                    <a style="text-decoration:none; color:black; hover" href="{{ route('barang_masuk.index') }}">
                        <div class="card p-4">
                            <p style="font-weight: 700">Barang Masuk</p>
                            <p style="font-weight: 700; font-size:38px;">{{ $barang_masuk }}</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a style="text-decoration:none; color:black; hover" href="{{ route('barang_rusak.index') }}">
                        <div class="card p-4">
                            <p style="font-weight: 700">Barang Rusak</p>
                            <p style="font-weight: 700; font-size:38px;">{{ $barang_rusak }}</p>
                        </div>
                    </a>
                </div>

            </div> --}}

    </div>
</div>
@endsection
