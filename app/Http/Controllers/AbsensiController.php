<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Jadwal;
use App\Models\Siswa;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensi = Absensi::with('siswa', 'tahunajaran', 'jadwal')->get();
        $siswa = Siswa::all();
        $tahunajaran = TahunAjaran::all();
        $jadwal = Jadwal::all();
        return view('absensi.index', compact('absensi', 'siswa', 'tahunajaran', 'jadwal'));
    }
    public function store(Request $request)
    {
        $absensi = new Absensi();
        if ($request->absen === "Hadir") {
            $absensi->hadir = $absensi->hadir + 1;
            $absensi->izin = 0;
            $absensi->sakit = 0;
        } else if ($request->absen === 'Izin') {
            $absensi->izin = $absensi->izin + 1;
            $absensi->hadir = 0;
            $absensi->sakit = 0;
        } else if ($request->absen === 'Sakit') {
            $absensi->sakit = $absensi->sakit + 1;
            $absensi->izin = 0;
            $absensi->hadir = 0;
        }
        $absensi->tanggal = $request->tanggal;
        $absensi->siswa_id = $request->siswa_id;
        $absensi->tahunajaran_id = $request->tahunajaran_id;
        $absensi->jadwal_id = $request->jadwal_id;
        $absensi->save();
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('absensi.index');
    }
    public function edit($id)
    {
        $absensi = Absensi::findOrFail($id);
        $siswa = Siswa::all();
        $tahunajaran = TahunAjaran::get();
        $jadwal = Jadwal::get();
        return view('absensi.edit', compact('absensi', 'siswa', 'tahunajaran', 'jadwal'));
    }
    public function update(Request $request, $id)
    {
        $absensi = Absensi::findOrFail($id);
        if ($request->absen === "Hadir") {
            $absensi->hadir = $absensi->hadir + 1;
            $absensi->izin = 0;
            $absensi->sakit = 0;
        } else if ($request->absen === 'Izin') {
            $absensi->izin = $absensi->izin + 1;
            $absensi->hadir = 0;
            $absensi->sakit = 0;
        } else if ($request->absen === 'Sakit') {
            $absensi->sakit = $absensi->sakit + 1;
            $absensi->izin = 0;
            $absensi->hadir = 0;
        }
        $absensi->tanggal = $request->tanggal;
        $absensi->siswa_id = $request->siswa_id;
        $absensi->tahunajaran_id = $request->tahunajaran_id;
        $absensi->jadwal_id = $request->jadwal_id;
        $absensi->save();
        Alert::success('Berhasil', 'Data Berhasil Diubah');
        return redirect()->route('absensi.index');
    }
    public function delete($id)
    {
        $absensi = Absensi::findOrFail($id);
        $absensi->delete();
        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect()->route('absensi.index');
    }
}