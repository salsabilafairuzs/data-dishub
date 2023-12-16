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
        Schema::create('ruas_jalans', function (Blueprint $table) {
            $table->id();
            $table->string('ruas');
            $table->string('pangkal_ruas');
            $table->string('ujung_ruas');
            $table->string('panjang_ruas');
            $table->string('lebar_ruas');
            $table->string('panjang_jalan_km_akhir');
            $table->string('type_jalan');
            $table->string('kelas_jalan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruas_jalans');
    }
};
