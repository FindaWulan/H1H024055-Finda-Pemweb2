<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ProgramStudiSeeder::class,
            MataKuliahSeeder::class,
        ]);

        Mahasiswa::factory()->count(30)->create();

        // isi nilai contoh untuk 10 mahasiswa pertama
        $matkulIds = MataKuliah::pluck('id');

        Mahasiswa::take(10)->get()->each(function (mahasiswa $mahasiswa) use ($matkulIds) {
            $ambil = $matkulIds->random(min(3, $matkulIds->count()));
            $data = [];
            foreach ($ambil as $id) {
                $data[$id] = ['nilai' => rand(60, 100)];
            }
            $mahasiswa->matakuliah()->attach($data);
        });
    }
}
