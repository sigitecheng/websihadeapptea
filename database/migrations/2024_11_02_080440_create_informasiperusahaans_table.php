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
        Schema::create('informasiperusahaans', function (Blueprint $table) {
            $table->id();
            $table->string('alamat');
            $table->text('telepon1');
            $table->text('telepon2');
            $table->string('email1');
            $table->string('email2');
            $table->string('jamkerjamulai');
            $table->string('jamkerjaselesai');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasiperusahaans');
    }
};
