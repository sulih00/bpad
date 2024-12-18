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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nopol');
            $table->string('merk');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('kendaraans_id');
            $table->unsignedBigInteger('jenis_id');
            $table->unsignedBigInteger('instansi_id');
            $table->date('tahun');
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kendaraans_id')->references('id')->on('kategori_kendaraans')->onDelete('cascade');
            $table->foreign('jenis_id')->references('id')->on('kategori_jenis')->onDelete('cascade');
            $table->foreign('instansi_id')->references('id')->on('kategori_instansis')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
