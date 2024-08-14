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
        Schema::create('tahapan_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buat_kegiatans_id');
            $table->foreign('buat_kegiatans_id')->references('id')->on('buat_kegiatans');
            $table->unsignedBigInteger('jenis_tahapans_id');
            $table->foreign('jenis_tahapans_id')->references('id')->on('jenis_tahapans');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tahapan_kegiatans');
    }
};
