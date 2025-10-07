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
        Schema::create('masters', function (Blueprint $table) {
            $table->id();
            $table->string('kode_klien')->nullable();
            $table->string('erm')->nullable();
            $table->string('rm')->nullable();
            $table->string('dp')->nullable();
            $table->string('kab')->nullable();
            $table->string('kota')->nullable();
            $table->string('akun_toko')->nullable();
            $table->string('nama_pemilik_pendaftaran')->nullable();
            $table->string('nama_pemilik_owner')->nullable();
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masters');
    }
};
