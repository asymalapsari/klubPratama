<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriterias', function (Blueprint $table) {
            $table->integer('id_pemain');
            $table->integer('kecepatan');
            $table->integer('akselerasi');
            $table->integer('stamina');
            $table->integer('keseimbangan_tubuh');
            $table->integer('lompatan');
            $table->integer('dribble');
            $table->integer('sundulan');
            $table->integer('akurasi_tendangan');
            $table->integer('bertahan');
            $table->integer('menyerang');
            $table->integer('konsistensi');
            $table->integer('mental_bertanding');
            $table->integer('determinasi');
            $table->integer('visi');
            $table->integer('team_work');
            $table->decimal('nilai_pemain_menyerang',4);
            $table->decimal('nilai_pemain_tengah',4);
            $table->decimal('nilai_pemain_bertahan',4);
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
        Schema::dropIfExists('kriterias');
    }
}
