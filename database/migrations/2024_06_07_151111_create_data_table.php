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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string("lokasi");
            $table->date("tanggal");
            $table->enum("jumlah_korban", ['1', '2', 'lebih dari 2']);
            $table->text("deskripsi")->nullable();
            $table->string("foto")->nullable(); // Kolom untuk menyimpan path/URL foto
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
