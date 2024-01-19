<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('judul_film');
            $table->date('jadwal');
            $table->string('durasi');
            $table->integer('harga');
            $table->string('gambar');
            $table->foreignId('jam_tayang_id')->references('id')->on('jam_tayangs')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('genre_id')->references('id')->on('genres')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('nomor_duduk_id')->references('id')->on('nomor_duduks')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('films');
    }
};
