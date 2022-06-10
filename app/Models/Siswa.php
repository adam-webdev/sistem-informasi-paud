<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function raport()
    {
        return $this->hasOne(Raport::class);
    }
    public function absensi()
    {
        return $this->hasOne(Absensi::class);
    }
}