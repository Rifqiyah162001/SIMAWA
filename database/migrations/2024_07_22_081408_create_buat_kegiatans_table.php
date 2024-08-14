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
        Schema::create('buat_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_kegiatans_id');
            $table->foreign('jenis_kegiatans_id')->references('id')->on('jenis_kegiatans');
            $table->integer('tahun'); 
            $table->date('waktu_mulai_pelaksanaan');
            $table->date('waktu_akhir_pelaksanaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buat_kegiatans');
    }
};
