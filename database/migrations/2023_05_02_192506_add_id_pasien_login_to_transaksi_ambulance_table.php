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
        Schema::table('transaksi_ambulance', function (Blueprint $table) {
            $table->foreignId('id_pasien_login')->nullable()->constrained('pasien')->cascadeOnUpdate()->cascadeOnDelete()->after('id_petugas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksi_ambulance', function (Blueprint $table) {
            //
        });
    }
};
