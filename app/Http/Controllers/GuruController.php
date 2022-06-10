<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jabatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class GuruController extends Controller
{
    public function index()
    {
        $user = User::whereHas(
            'roles',
            function ($q) {
                $q->where('name', 'Guru');
            }
        )->get();

        $jabatan = Jabatan::all();
        $guru = Guru::with('user')->get();
        return view('guru.index', compact('user', 'guru', 'jabatan'));
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

        $image = $request->file('image');
        $image = $image->store('images/guru');

        $guru = new Guru();
        $guru->user_id = $request->user_id;
        $guru->jabatan_id = $request->jabatan_id;
        $guru->nama_lengkap = $request->nama_lengkap;
        $guru->tempat_lahir = $request->tempat_lahir;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->no_hp = $request->no_hp;
        $guru->pendidikan = $request->pendidikan;
        $guru->alamat = $request->alamat;
        $guru->image = $image;
        $guru->save();
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('guru.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = Guru::findOrFail($id);
        return view('guru.detail', compact('guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::whereHas(
            'roles',
            function ($q) {
                $q->where('name', 'Guru');
            }
        )->get();
        $guru = Guru::findOrFail($id);
        // $kondisi = $kondisi->with('barang')->get();
        return view('guru.edit', compact('user', 'guru'));
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
        $guru = Guru::findOrFail($id);
        $image = $request->file('image');
        if ($image) {
            Storage::delete($guru->image);
            $image = $image->store('images/guru');
        } else {
            $image = $guru->image;
        }

        $guru->user_id = $request->user_id;
        $guru->jabatan_id = $request->jabatan_id;
        $guru->nama_lengkap = $request->nama_lengkap;
        $guru->tempat_lahir = $request->tempat_lahir;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->no_hp = $request->no_hp;
        $guru->pendidikan = $request->pendidikan;
        $guru->alamat = $request->alamat;
        $guru->image = $image;
        $guru->save();
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $guru = Guru::findOrFail($id);
        Storage::delete($guru->image);
        $guru->delete();
        Alert::success('Berhasil', 'Data Berhasil DiHapus');
        return redirect()->route('guru.index');
    }
}