<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jadwal;
use App\Models\Kelas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JadwalController extends Controller
{

    public function index()
    {
        $jadwal = Jadwal::with('guru', 'kelas')->get();
        $kelas = Kelas::all();
        $guru = Guru::all();
        return view('jadwal.index', compact('jadwal', 'guru', 'kelas'));
    }
    public function store(Request $request)
    {
        $jadwal = new Jadwal();
        $jadwal->hari = $request->hari;
        $jadwal->materi_kegiatan = $request->materi_kegiatan;
        $jadwal->keterangan = $request->keterangan;
        $jadwal->guru_id = $request->guru_id;
        $jadwal->kelas_id = $request->kelas_id;
        $jadwal->save();
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('jadwal.index');
    }
    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $guru = Guru::all();
        $kelas = Kelas::all();
        return view('jadwal.edit', compact('jadwal', 'guru', 'kelas'));
    }
    public function update(Request $request, $id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->hari = $request->hari;
        $jadwal->materi_kegiatan = $request->materi_kegiatan;
        $jadwal->keterangan = $request->keterangan;
        $jadwal->guru_id = $request->guru_id;
        $jadwal->kelas_id = $request->kelas_id;
        $jadwal->save();
        Alert::success('Berhasil', 'Data Berhasil Diubah');
        return redirect()->route('jadwal.index');
    }
    public function delete($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();
        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect()->route('jadwal.index');
    }
}