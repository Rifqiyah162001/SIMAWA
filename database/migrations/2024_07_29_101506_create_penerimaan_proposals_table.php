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
        Schema::create('penerimaan_proposals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buat_kegiatans_id')->constrained()->onDelete('cascade');
            $table->foreignId('tahapan_kegiatans_id')->constrained()->onDelete('cascade');
            $table->string('judul_proposal');
            $table->string('kategori_usaha');
            $table->foreignId('ketua_tim')->constrained('users'); // Mengacu ke tabel users
            $table->string('nomor_hp_ketua');
            $table->string('email_ketua');
            // $table->json('anggota_tim'); // Menyimpan sebagai JSON
            $table->foreignId('dosen_pembimbing')->constrained('users'); 
            $table->string('proposal_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerimaan_proposals');
    }
};
