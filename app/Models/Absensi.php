<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
    public function tahunajaran()
    {
        return $this->belongsTo(TahunAjaran::class);
    }
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}