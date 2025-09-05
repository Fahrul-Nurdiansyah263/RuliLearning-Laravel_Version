<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\IsiMateri;

class IsiMateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID'); 

        
        IsiMateri::create([
            'kategori_id' => 1,
            'judul' => 'Pengenalan HTML',
            'isi' => $faker->realText(500),
            'urutan' => 1,
        ]);
        IsiMateri::create([
            'kategori_id' => 1,
            'judul' => 'Struktur Dasar Dokumen HTML',
            'isi' => $faker->realText(500),
            'urutan' => 2,
        ]);

        
        IsiMateri::create([
            'kategori_id' => 2,
            'judul' => 'Instalasi dan Konfigurasi',
            'isi' => $faker->realText(500),
            'urutan' => 1,
        ]);
        IsiMateri::create([
            'kategori_id' => 2,
            'judul' => 'Routing dan Controller',
            'isi' => $faker->realText(500),
            'urutan' => 2,
        ]);
    }
}
