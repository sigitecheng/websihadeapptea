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
        Schema::create('aboutsihades', function (Blueprint $table) {
            $table->id();
            $table->text('judul');
            $table->text('point1');
            $table->text('point2');
            $table->text('point3');
            $table->text('point4');
            $table->text('point5');
            $table->text('point6');
            $table->text('point7');
            $table->text('point8');
            $table->text('point9');
            $table->text('keterangan');
            $table->softDeletes(); // Menambahkan kolom deleted_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutsihades');
    }
};
