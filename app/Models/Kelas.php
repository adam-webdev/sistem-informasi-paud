<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    public function siswa()
    {
        return $this->hasOne(Siswa::class);
    }
    public function jadwal()
    {
        return $this->hasOne(Jadwal::class);
    }
}