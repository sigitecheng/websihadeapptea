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
        Schema::create('productanimalfarmings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partners_id');
            $table->foreignId('peternakan_id');
            $table->integer('kuantiti');
            $table->integer('hargasatuan');
            $table->integer('totalharga');
            $table->date('tanggalpemesanan');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productanimalfarmings');
    }
};
