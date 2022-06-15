<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Raport;
use App\Models\Siswa;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RaportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $raport = Raport::with('siswa', 'guru', 'tahunajaran')->get();
        return view('raport.index', compact('raport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        $guru = Guru::all();
        $tahunajaran = TahunAjaran::all();
        return view('raport.input', compact('siswa', 'guru', 'tahunajaran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // ddd($request->all());
        $raport = new Raport();
        $raport->siswa_id = $request->siswa_id;
        $raport->guru_id = $request->guru_id;
        $raport->tahunajaran_id = $request->tahunajaran_id;
        $raport->catatan = $request->catatan;
        $raport->agama_moral_a1 = $request->agama_moral_a1;
        $raport->agama_moral_a2 = $request->agama_moral_a2;
        $raport->agama_moral_a3 = $request->agama_moral_a3;
        $raport->agama_moral_a4 = $request->agama_moral_a4;
        $raport->fisik_motorik_a1 = $request->fisik_motorik_a1;
        $raport->fisik_motorik_a2 = $request->fisik_motorik_a2;
        $raport->fisik_motorik_a3 = $request->fisik_motorik_a3;
        $raport->fisik_motorik_b1 = $request->fisik_motorik_b1;
        $raport->fisik_motorik_b2 = $request->fisik_motorik_b2;
        $raport->fisik_motorik_b3 = $request->fisik_motorik_b3;
        $raport->fisik_motorik_b4 = $request->fisik_motorik_b4;
        $raport->fisik_motorik_b5 = $request->fisik_motorik_b5;
        $raport->fisik_motorik_b6 = $request->fisik_motorik_b6;
        $raport->fisik_motorik_b7 = $request->fisik_motorik_b7;
        $raport->kognitif_a1 = $request->kognitif_a1;
        $raport->kognitif_a2 = $request->kognitif_a2;
        $raport->kognitif_a3 = $request->kognitif_a3;
        $raport->bahasa_a1 = $request->bahasa_a1;
        $raport->bahasa_a2 = $request->bahasa_a2;
        $raport->bahasa_a3 = $request->bahasa_a3;
        $raport->bahasa_a4 = $request->bahasa_a4;
        $raport->bahasa_a5 = $request->bahasa_a5;
        $raport->sosial_emosional_a1 = $request->sosial_emosional_a1;
        $raport->sosial_emosional_a2 = $request->sosial_emosional_a2;
        $raport->sosial_emosional_a3 = $request->sosial_emosional_a3;
        $raport->sosial_emosional_a4 = $request->sosial_emosional_a4;
        $raport->sosial_emosional_a5 = $request->sosial_emosional_a5;
        $raport->seni_a1 = $request->seni_a1;
        $raport->seni_a2 = $request->seni_a2;
        $raport->save();
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('raport.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $raport = Raport::findOrFail($id);
        $siswa = Siswa::all();
        $guru = Guru::all();
        $tahunajaran = TahunAjaran::all();
        return view('raport.detail', compact('raport', 'siswa', 'guru', 'tahunajaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $raport = Raport::findOrFail($id);
        $siswa = Siswa::all();
        $guru = Guru::all();
        $tahunajaran = TahunAjaran::all();
        return view('raport.edit', compact('raport', 'siswa', 'guru', 'tahunajaran'));
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
        $raport = Raport::findOrFail($id);
        $raport->siswa_id = $request->siswa_id;
        $raport->guru_id = $request->guru_id;
        $raport->tahunajaran_id = $request->tahunajaran_id;
        $raport->catatan = $request->catatan;
        $raport->agama_moral_a1 = $request->agama_moral_a1;
        $raport->agama_moral_a2 = $request->agama_moral_a2;
        $raport->agama_moral_a3 = $request->agama_moral_a3;
        $raport->agama_moral_a4 = $request->agama_moral_a4;
        $raport->fisik_motorik_a1 = $request->fisik_motorik_a1;
        $raport->fisik_motorik_a2 = $request->fisik_motorik_a2;
        $raport->fisik_motorik_a3 = $request->fisik_motorik_a3;
        $raport->fisik_motorik_b1 = $request->fisik_motorik_b1;
        $raport->fisik_motorik_b2 = $request->fisik_motorik_b2;
        $raport->fisik_motorik_b3 = $request->fisik_motorik_b3;
        $raport->fisik_motorik_b4 = $request->fisik_motorik_b4;
        $raport->fisik_motorik_b5 = $request->fisik_motorik_b5;
        $raport->fisik_motorik_b6 = $request->fisik_motorik_b6;
        $raport->fisik_motorik_b7 = $request->fisik_motorik_b7;
        $raport->kognitif_a1 = $request->kognitif_a1;
        $raport->kognitif_a2 = $request->kognitif_a2;
        $raport->kognitif_a3 = $request->kognitif_a3;
        $raport->bahasa_a1 = $request->bahasa_a1;
        $raport->bahasa_a2 = $request->bahasa_a2;
        $raport->bahasa_a3 = $request->bahasa_a3;
        $raport->bahasa_a4 = $request->bahasa_a4;
        $raport->bahasa_a5 = $request->bahasa_a5;
        $raport->sosial_emosional_a1 = $request->sosial_emosional_a1;
        $raport->sosial_emosional_a2 = $request->sosial_emosional_a2;
        $raport->sosial_emosional_a3 = $request->sosial_emosional_a3;
        $raport->sosial_emosional_a4 = $request->sosial_emosional_a4;
        $raport->sosial_emosional_a5 = $request->sosial_emosional_a5;
        $raport->seni_a1 = $request->seni_a1;
        $raport->seni_a2 = $request->seni_a2;
        $raport->save();
        Alert::success('Berhasil', 'Data Berhasil Diubah');
        return redirect()->route('raport.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $raport = Raport::findOrFail($id);
        $raport->delete();
        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect()->route('raport.index');
    }
}