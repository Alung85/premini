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
            Schema::create('penempatan', function (Blueprint $table) {
                $table->id();
                $table->string('nama_pasien'); // Pastikan tipe data konsisten
                $table->string('nama_dokter'); // Pastikan tipe data konsisten
                $table->datetime('tanggal_masuk');
                $table->time('jam_masuk');
                $table->time('jam_keluar');
                $table->datetime('tanggal_keluar');
                $table->timestamps();
    
                // Mengatur foreign key setelah tabel dibuat
                $table->foreign('nama_pasien')->references('id')->on('pasien')->onDelete('cascade');
                $table->foreign('nama_dokter')->references('id')->on('dokter')->onDelete('cascade');
            });
        }
    
        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('penempatan');
        }
    };
    