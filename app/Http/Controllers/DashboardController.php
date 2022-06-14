<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Barang_masuk;
use App\Models\BarangRusak;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Kondisi;
use App\Models\Perusahaan;
use App\Models\Ruangan;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // $perusahaan = Perusahaan::get();
        $data = Auth::user()->name;
        $siswa = Siswa::count();
        $guru = Guru::count();
        $kelas = Kelas::count();
        // $ruangan = Ruangan::count();
        $pengguna = User::count();
        // $barang_rusak = BarangRusak::count();
        // $barang_masuk = Barang_masuk::count();

        return view("dashboard", compact("data", "siswa", "pengguna", "guru", "kelas"));
    }
}