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
        Schema::create('export_barangs', function (Blueprint $table) {
            $table->id('id_export_barangs');
            $table->unsignedBigInteger('id_barang');
            $table->unsignedBigInteger('id_suplier');
            $table->string('nama_suplier');
            $table->string('nama_barang');
            $table->integer('jumlah_barang');
            $table->integer('sisa_barang');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('export_barangs');
    }
};
