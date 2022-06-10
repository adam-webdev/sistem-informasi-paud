<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\RencanaKegiatanMingguan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RencanaKegiatanMingguanController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        $rkm = RencanaKegiatanMingguan::with('guru')->get();
        return view('rkm.index', compact('rkm', 'guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rkm = new RencanaKegiatanMingguan();
        $rkm->guru_id = $request->guru_id;
        $rkm->satuan_pendidikan = $request->satuan_pendidikan;
        $rkm->kelompok = $request->kelompok;
        $rkm->tema = $request->tema;
        $rkm->sub_tema = $request->sub_tema;
        $rkm->lingkup_perkembangan = $request->lingkup_perkembangan;
        $rkm->tingkat_pencapaian = $request->tingkat_pencapaian;
        $rkm->indikator = $request->indikator;
        $rkm->save();
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('rkm.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = Guru::all();
        $rkm = RencanaKegiatanMingguan::findOrFail($id);
        // $kondisi = $kondisi->with('barang')->get();
        return view('rkm.edit', compact('guru', 'rkm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rkm = RencanaKegiatanMingguan::findOrFail($id);
        $rkm->guru_id = $request->guru_id;
        $rkm->satuan_pendidikan = $request->satuan_pendidikan;
        $rkm->kelompok = $request->kelompok;
        $rkm->tema = $request->tema;
        $rkm->sub_tema = $request->sub_tema;
        $rkm->lingkup_perkembangan = $request->lingkup_perkembangan;
        $rkm->tingkat_pencapaian = $request->tingkat_pencapaian;
        $rkm->indikator = $request->indikator;
        $rkm->save();
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('rkm.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rkm = RencanaKegiatanMingguan::findOrFail($id);
        $rkm->delete();
        Alert::success('Berhasil', 'Data Berhasil DiHapus');
        return redirect()->route('rkm.index');
    }
}