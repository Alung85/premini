<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('janji', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasien');
            $table->string('nama_dokter');
            $table->datetime('tanggal_janji');
            $table->string('status');
            $table->timestamps();


            $table->foreign('nama_pasien')->references('id')->on('pasien');
            $table->foreign('nama_dokter')->references('id')->on('dokter');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('janji');
    }
};
