<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    use HasFactory;
    public function raport()
    {
        return $this->hasOne(Raport::class);
    }
    public function absensi()
    {
        return $this->hasOne(Absensi::class);
    }
}