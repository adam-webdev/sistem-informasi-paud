<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaController extends Controller
{
    public function index()
    {
        $user = User::whereHas(
            'roles',
            function ($q) {
                $q->where('name', 'Siswa');
            }
        )->get();

        $kelas = Kelas::all();
        $siswa = Siswa::with('user')->get();
        return view('siswa.index', compact('user', 'siswa', 'kelas'));
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
        $image = $image->store('images/siswa');

        $siswa = new Siswa();
        $siswa->user_id = $request->user_id;
        $siswa->kelas_id = $request->kelas_id;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->nis = $request->nis;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->agama = $request->agama;
        $siswa->nama_ayah = $request->nama_ayah;
        $siswa->nama_ibu = $request->nama_ibu;
        $siswa->no_hp = $request->no_hp;
        $siswa->alamat = $request->alamat;
        $siswa->image = $image;
        $siswa->save();
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.detail', compact('siswa'));
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
                $q->where('name', 'Siswa');
            }
        )->get();
        $kelas = Kelas::all();
        $siswa = Siswa::findOrFail($id);
        // $kondisi = $kondisi->with('barang')->get();
        return view('siswa.edit', compact('user', 'siswa', 'kelas'));
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
        $siswa = Siswa::findOrFail($id);

        $image = $request->file('image');
        if ($image) {
            Storage::delete($siswa->image);
            $image = $image->store('images/siswa');
        } else {
            $image = $siswa->image;
        }
        $siswa->user_id = $request->user_id;
        $siswa->kelas_id = $request->kelas_id;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->nis = $request->nis;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->agama = $request->agama;
        $siswa->nama_ayah = $request->nama_ayah;
        $siswa->nama_ibu = $request->nama_ibu;
        $siswa->no_hp = $request->no_hp;
        $siswa->alamat = $request->alamat;
        $siswa->image = $image;
        $siswa->save();
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $siswa = Siswa::findOrFail($id);
        Storage::delete($siswa->image);
        $siswa->delete();
        Alert::success('Berhasil', 'Data Berhasil DiHapus');
        return redirect()->route('siswa.index');
    }
}