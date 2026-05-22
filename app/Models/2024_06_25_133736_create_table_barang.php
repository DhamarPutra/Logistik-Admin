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
        Schema::create('dbbarang', function (Blueprint $table) {
            $table->char('Kode_Barang', 5);
            $table->string('Nama_Barang', 20);
            $table->int('Jumlah_Barang', 4);
            $table->Primary('Kode_Barang');
            $table->timestamps();
        });

        Schema::create('dbgrupbarang', function (Blueprint $table) {
            $table->string('Nama_Grup', 20);
            $table->int('Jumlah_Barang', 4);
            $table->varchar('Kode_Resi', 10);
            $table->varchar('Kode_Lokasi_Asal', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_barang');
    }
};
