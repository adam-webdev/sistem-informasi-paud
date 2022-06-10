<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->id();
            $table->string('hadir');
            $table->string('izin');
            $table->string('sakit');
            $table->date('tanggal');
            $table->foreignId('siswa_id')->constrained('siswas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tahunajaran_id')->constrained('tahun_ajarans')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('jadwal_id')->constrained('jadwals')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensis');
    }
}