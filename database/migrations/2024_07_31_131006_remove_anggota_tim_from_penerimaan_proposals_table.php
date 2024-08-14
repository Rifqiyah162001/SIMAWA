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
        Schema::table('penerimaan_proposals', function (Blueprint $table) {
            $table->dropColumn('anggota_tim');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penerimaan_proposals', function (Blueprint $table) {
            $table->json('anggota_tim')->nullable();
        });
    }
};
