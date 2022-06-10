<?php

namespace App\Http\Controllers;

use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TahunAjaranController extends Controller
{
    public function index()
    {
        $tahun = TahunAjaran::all();
        return view('tahun-ajaran.index', compact('tahun'));
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
        $tahun = new TahunAjaran();
        $tahun->kode_tahun = $request->kode_tahun;
        $tahun->tahun_ajaran = $request->tahun_ajaran;
        $tahun->semester = $request->semester;
        $tahun->save();
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('tahun-ajaran.index');
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
        $tahun = TahunAjaran::findOrFail($id);
        return view('tahun-ajaran.edit', compact('tahun'));
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
        $tahun = TahunAjaran::findOrFail($id);
        $tahun->kode_tahun = $request->kode_tahun;
        $tahun->tahun_ajaran = $request->tahun_ajaran;
        $tahun->semester = $request->semester;
        $tahun->save();
        Alert::success('Berhasil', 'Data Berhasil Diubah');
        return redirect()->route('tahun-ajaran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $tahun = TahunAjaran::findOrFail($id);
        $tahun->delete();
        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect()->route('tahun-ajaran.index');
    }
}