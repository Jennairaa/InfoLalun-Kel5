<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kecelakaans', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi');
            $table->date('tanggal');
            $table->integer('korban');
            $table->string('bukti')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kecelakaans');
    }
};
