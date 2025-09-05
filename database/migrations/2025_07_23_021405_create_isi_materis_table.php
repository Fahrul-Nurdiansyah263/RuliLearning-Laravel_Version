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
        Schema::create('isi_materis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->constrained('kategori_materis')->onDelete('cascade');
            $table->string('judul');
            $table->longText('isi');
            $table->string('gambar')->nullable();
            $table->integer('urutan')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('isi_materis');
    }
};
