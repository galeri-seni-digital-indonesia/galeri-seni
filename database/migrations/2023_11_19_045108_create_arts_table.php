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
            $table->integer('tahun');
            $table->string('ukuran');
            $table->string('mediaLukis');
            $table->string('gambar');
            $table->text('deskripsi');
            $table->string('sumber');
            $table->foreignId('artistId');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
