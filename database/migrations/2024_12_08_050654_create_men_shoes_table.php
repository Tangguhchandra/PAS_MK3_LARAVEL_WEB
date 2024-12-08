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
        Schema::create('men_shoes', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Atau tambahkan default value
            // Nama produk
            $table->string('description'); // Deskripsi produk
            $table->decimal('price', 10, 2); // Harga produk
            $table->string('image'); // Nama file gambar yang diunggah
            $table->float('rating', 2, 1)->default(0); // Rating produk
            $table->timestamps(); // Timestamps (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('men_shoes');
    }
};
