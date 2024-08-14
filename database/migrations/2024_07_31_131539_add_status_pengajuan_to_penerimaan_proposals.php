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
            $table->string('status_pengajuan')->default('proses'); // 'proses', 'disetujui', 'ditolak'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penerimaan_proposals', function (Blueprint $table) {
            $table->dropColumn('status_pengajuan');
        });
    }
};
