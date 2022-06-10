<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('guru_id')->constrained('gurus')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tahunajaran_id')->constrained('tahun_ajarans')->onUpdate('cascade')->onDelete('cascade');
            $table->string('agama_moral_a1');
            $table->string('agama_moral_a2');
            $table->string('agama_moral_a3');
            $table->string('agama_moral_a4');
            $table->string('fisik_motorik_a1');
            $table->string('fisik_motorik_a2');
            $table->string('fisik_motorik_a3');
            $table->string('fisik_motorik_b1');
            $table->string('fisik_motorik_b2');
            $table->string('fisik_motorik_b3');
            $table->string('fisik_motorik_b4');
            $table->string('fisik_motorik_b5');
            $table->string('fisik_motorik_b6');
            $table->string('fisik_motorik_b7');
            $table->string('kognitif_a1');
            $table->string('kognitif_a2');
            $table->string('kognitif_a3');
            $table->string('bahasa_a1');
            $table->string('bahasa_a2');
            $table->string('bahasa_a3');
            $table->string('bahasa_a4');
            $table->string('bahasa_a5');
            $table->string('sosial_emosional_a1');
            $table->string('sosial_emosional_a2');
            $table->string('sosial_emosional_a3');
            $table->string('sosial_emosional_a4');
            $table->string('sosial_emosional_a5');
            $table->string('seni_a1');
            $table->string('seni_a2');
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
        Schema::dropIfExists('raports');
    }
}