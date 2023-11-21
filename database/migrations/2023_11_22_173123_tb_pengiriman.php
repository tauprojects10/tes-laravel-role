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
        Schema::create('tb_pengiriman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pesanan_id')->constrained('tb_pesanan')->restrictOnDelete();
            $table->string('metode_pengiriman', 100);
            $table->enum('status_pengiriman', ['belum diterima', 'diterima'])->default('belum diterima');
            $table->date('tanggal_pengiriman');
            $table->date('tanggal_menerima');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pengiriman');
    }
};
