<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KategoriMateri;

class KategoriMateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriMateri::create([
            'judul' => 'Dasar-Dasar HTML',
            'deskripsi' => 'Pelajari fondasi web dengan HTML dari awal sampai akhir.',
            'is_premium' => false,
            'harga' => 0,
        ]);
        
        KategoriMateri::create([
            'judul' => 'Mastering Laravel 11',
            'deskripsi' => 'Kursus mendalam untuk menjadi ahli dalam framework Laravel 11.',
            'is_premium' => true,
            'harga' => 250000,
        ]);

        KategoriMateri::create([
            'judul' => 'JavaScript Modern (ES6+)',
            'deskripsi' => 'Kuasai fitur-fitur terbaru JavaScript untuk membangun aplikasi interaktif.',
            'is_premium' => true,
            'harga' => 180000,
        ]);
        KategoriMateri::create([
            'judul' => 'Pengembangan Aplikasi Mobile dengan Flutter',
            'deskripsi' => 'Pelajari cara membuat aplikasi mobile yang indah dan responsif dengan Flutter.',
            'is_premium' => true,
            'harga' => 300000,
        ]);

    }
}
