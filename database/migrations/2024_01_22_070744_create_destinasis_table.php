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
        Schema::create('destinasi', function (Blueprint $table) {
            $table->id();
            $table->string('wisata');
            $table->foreignId('genre_id')->references('id')->on('genre')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('lokasi_id')->references('id')->on('lokasi')->onUpdate('cascade')->onDelete('restrict');
            $table->string('foto');
            $table->bigInteger('tiket_anak');
            $table->bigInteger('tiket_remaja');
            $table->bigInteger('tiket_dewasa');
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
        Schema::dropIfExists('destinasi');
    }
};
