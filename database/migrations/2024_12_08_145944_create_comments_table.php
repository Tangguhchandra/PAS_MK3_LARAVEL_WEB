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
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Nama pengulas
            $table->text('description'); // Komentar
            $table->string('image'); // URL gambar
            $table->unsignedTinyInteger('rating'); // Rating (0-5)
            $table->timestamps(); // Waktu dibuat/diupdate
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
