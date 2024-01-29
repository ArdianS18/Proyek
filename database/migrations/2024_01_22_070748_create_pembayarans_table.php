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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tiket_id')->references('id')->on('tiket')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('destinasi_id')->references('id')->on('destinasi')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('nama')->references('id')->on('tiket')->onUpdate('cascade')->onDelete('restrict');
            $table->integer('byr');
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
        Schema::dropIfExists('pembayaran');
    }
};
