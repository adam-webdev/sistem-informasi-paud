<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Models\Siswa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penilaian = Penilaian::with('siswa')->get();
        $siswa = Siswa::with('user')->get();
        return view('penilaian.index', compact('penilaian', 'siswa'));
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
        $penilaian = new Penilaian();
        $penilaian->siswa_id = $request->siswa_id;
        $penilaian->agama_moral = $request->agama_moral;
        $penilaian->bahasa = $request->bahasa;
        $penilaian->fisik_motorik = $request->fisik_motorik;
        $penilaian->kognitif = $request->kognitif;
        $penilaian->emosional = $request->emosional;
        $penilaian->seni = $request->seni;
        $penilaian->save();
        Alert::success('Berhasil', 'Data Berhasil Disimpan');
        return redirect()->route('penilaian.index');
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
        $penilaian = Penilaian::findOrFail($id);
        return view('penilaian.edit', compact('penilaian'));
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
        $penilaian = Penilaian::findOrFail($id);
        $penilaian->siswa_id = $request->siswa_id;
        $penilaian->agama_moral = $request->agama_moral;
        $penilaian->bahasa = $request->bahasa;
        $penilaian->fisik_motorik = $request->fisik_motorik;
        $penilaian->kognitif = $request->kognitif;
        $penilaian->seni = $request->seni;
        $penilaian->save();
        Alert::success('Berhasil', 'Data Berhasil Diubah');
        return redirect()->route('penilaian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penilaian = Penilaian::findOrFail($id);
        $penilaian->delete();
        Alert::success('Berhasil', 'Data Berhasil Diubah');
        return redirect()->route('penilaian.index');
    }
}