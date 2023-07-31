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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kode_jenis');
            $table->unsignedBigInteger('kode_pemasok');
            $table->string('kode_barang');
            $table->string('nama');
            $table->integer('harga');
            $table->timestamps();

            $table->foreign('kode_jenis')->references('id')->on('jenis_barangs')->onDelete('cascade');
            $table->foreign('kode_pemasok')->references('id')->on('pemasoks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
