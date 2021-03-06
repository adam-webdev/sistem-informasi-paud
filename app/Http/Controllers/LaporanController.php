<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Barang;
use App\Models\Barang_keluar;
use App\Models\BarangRusak;
use App\Models\Guru;
use App\Models\Kondisi;
use App\Models\PindahBarang;
use App\Models\Raport;
use App\Models\Ruangan;
use App\Models\Siswa;
use Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Http\Request;

class LaporanController extends Controller
{


    public function siswa(Request $request)
    {
        $data = Siswa::with('kelas', 'user')->get();
        $pdf = PDF::loadview('siswa.print', compact('data'))->setPaper('A4');
        return $pdf->stream('laporan-siswa.pdf');
    }

    public function guru(Request $request)
    {
        $data = Guru::with('jabatan', 'user')->get();
        $pdf = PDF::loadview('guru.print', compact('data'))->setPaper('A4');
        return $pdf->stream('laporan-guru.pdf');
    }

    public function raport($id)
    {
        $raport = Raport::findOrFail($id);
        $izin = Absensi::select('izin')->where('siswa_id', $raport->siswa->id)->sum('izin');
        $sakit = Absensi::select('sakit')->where('siswa_id', $raport->siswa->id)->sum('sakit');
        $hadir = Absensi::select('hadir')->where('siswa_id', $raport->siswa->id)->sum('hadir');

        $data = [
            'izin' => $izin,
            'sakit' => $sakit,
            'hadir' => $hadir,
        ];
        // ddd($data);
        // $raport = Raport::where('id', $id)->with('siswa', 'guru', 'tahunajaran')->get();
        $pdf = PDF::loadview('raport.print', compact('raport', 'data'))->setPaper('A4');
        return $pdf->stream('raport.pdf');
    }


    public function view_barang_rusak()
    {
        return view('laporan.barang-rusak.index');
    }
    public function barang_rusak(Request $request)
    {
        $periode2 = $request->periode;
        if ($periode2 == "all") {
            $data2 = BarangRusak::with("barang")->get();
            $pdf2 = PDF::loadview('laporan.barang-rusak.print', compact('data2', 'periode2'))->setPaper('A4');
            return $pdf2->stream('laporan-all.pdf');
        } else if ($periode2 == "periode") {
            $tgl_awal2 = $request->awal;
            $tgl_akhir2 = $request->akhir;
            $data2 = BarangRusak::whereBetween('created_at', [$tgl_awal2, $tgl_akhir2])
                ->orderBy('created_at', 'ASC')->get();
            $pdf2 = PDF::loadview('laporan.barang-rusak.print', compact('data2', 'periode2', 'tgl_awal2', 'tgl_akhir2'))->setPaper('A4');
            return $pdf2->stream('laporan-periode-barang-rusak.pdf');
        }
    }
    public function view_kondisi()
    {
        return view('laporan.kondisi.index');
    }
    public function kondisi(Request $request)
    {
        $periode = $request->periode;
        if ($periode == "all") {
            $data = Kondisi::get();
            $pdf = PDF::loadview('laporan.kondisi.print', compact('data', 'periode'))->setPaper('A4');
            return $pdf->stream('laporan-all.pdf');
        } else if ($periode == "periode") {
            $tgl_awal = $request->awal;
            $tgl_akhir = $request->akhir;
            $data = Kondisi::whereBetween('created_at', [$tgl_awal, $tgl_akhir])
                ->orderBy('created_at', 'ASC')->get();
            $pdf = PDF::loadview('laporan.kondisi.print', compact('data', 'periode', 'tgl_awal', 'tgl_akhir'))->setPaper('A4');
            return $pdf->stream('laporan-periode-kondisi.pdf');
        }
    }
    public function view_letak_barang()
    {
        return view('laporan.letak_barang.index');
    }
    public function letak_barang(Request $request)
    {
        $periode = $request->periode;
        if ($periode == "all") {
            $data = PindahBarang::get();
            $pdf = PDF::loadview('laporan.letak_barang.print', compact('data', 'periode'))->setPaper('A4');
            return $pdf->stream('laporan-all.pdf');
        } else if ($periode == "periode") {
            $tgl_awal = $request->awal;
            $tgl_akhir = $request->akhir;
            $data = PindahBarang::whereBetween('created_at', [$tgl_awal, $tgl_akhir])
                ->orderBy('created_at', 'ASC')->get();
            $pdf = PDF::loadview('laporan.letak_barang.print', compact('data', 'periode', 'tgl_awal', 'tgl_akhir'))->setPaper('A4');
            return $pdf->stream('laporan-periode-letak_barang.pdf');
        }
    }
}