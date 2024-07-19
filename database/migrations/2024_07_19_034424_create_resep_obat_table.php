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
        Schema::create('resep_obat', function (Blueprint $table) {
            $table->id();
            $table->string('rekam_medis');
            $table->string('nama_obat');
            $table->string('dosis');
            $table->string('frekuensi');
            $table->string('durasi');
            $table->timestamps();
            $table->foreign('rekam_medis')->refences('id')->on('rekam_medis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resep_obat');
    }
};
