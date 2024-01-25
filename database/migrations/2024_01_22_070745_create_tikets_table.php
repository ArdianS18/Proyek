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
        Schema::create('tiket', function (Blueprint $table) {
            $table->id();
            $table->foreignId("destinasi_id")->references('id')->on('destinasi')->onUpdate('cascade')->onDelete('restrict');
            $table->string('atas_nama');
            $table->date('tanggal');
            $table->integer('tkt_anak');
            $table->integer('tkt_remaja');
            $table->integer('tkt_dewasa');
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
        Schema::dropIfExists('tiket');
    }
};
