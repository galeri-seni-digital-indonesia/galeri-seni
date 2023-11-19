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
        Schema::create('arts', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('pelukis');
            $table->integer('Tahun');
            $table->integer('panjangUkuran');
            $table->integer('lebarUkuran');
            $table->integer('tinggiUkuran');
            $table->string('mediaLukis');
            $table->string('gambar');
            $table->text('deskripsi');
            $table->string('namaSeniman'); //ini sama pelukis sama gk sih ?
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arts');
    }
};
