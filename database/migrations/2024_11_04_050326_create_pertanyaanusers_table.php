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
        Schema::create('pertanyaanusers', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap');
            $table->string('email');
            $table->string('pertanyaan');
            $table->string('telepon');
            $table->string('pesan');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertanyaanusers');
    }
};
