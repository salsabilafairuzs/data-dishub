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
        Schema::create('kecelakaans', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('bulan');
            $table->integer('jml_kejadian');
            $table->integer('jml_korban_meninggal');
            $table->integer('jml_korban_luka_berat');
            $table->integer('jml_korban_luka_ringan');
            $table->integer('kerugian_material');
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
