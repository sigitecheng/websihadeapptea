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
        Schema::create('whysihades', function (Blueprint $table) {
            $table->id();
            $table->text('pertanyaan1');
            $table->text('jawaban1');
            $table->text('pertanyaan2');
            $table->text('jawaban2');
            $table->text('pertanyaan3');
            $table->text('jawaban3');
            $table->text('pertanyaan4');
            $table->text('jawaban4');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whysihades');
    }
};
