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
        Schema::create('jenis_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kegiatan');
            $table->unsignedBigInteger('kategori_kegiatans_id');
            $table->foreign('kategori_kegiatans_id')->references('id')->on('kategori_kegiatans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_kegiatans');
    }
};
