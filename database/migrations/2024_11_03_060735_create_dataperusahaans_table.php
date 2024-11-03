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
        Schema::create('dataperusahaans', function (Blueprint $table) {
            $table->id();
            $table->string('namaperusahaan');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('negara');
            $table->string('namaruangproduksi');
            $table->string('jumlahkaryawan');
            $table->string('kapasitasproduksi');
            $table->string('keteranganperalatan');
            $table->string('kualitas');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dataperusahaans');
    }
};
