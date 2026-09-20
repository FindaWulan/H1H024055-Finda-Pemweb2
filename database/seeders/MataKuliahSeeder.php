<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    public function run(): void
    {
        $daftar = [
            ['kode' => 'TK101', 'nama' => 'Algoritma dan Pemrograman', 'sks' => 3, 'semester' => 1],
            ['kode' => 'TK102', 'nama' => 'Sistem Digital',            'sks' => 3, 'semester' => 1],
            ['kode' => 'TK201', 'nama' => 'Struktur Data',             'sks' => 3, 'semester' => 2],
            ['kode' => 'TK202', 'nama' => 'Sistem Mikrokontroler',     'sks' => 3, 'semester' => 3],
            ['kode' => 'TK301', 'nama' => 'Pemrograman Web II',        'sks' => 3, 'semester' => 5],
        ];

        foreach ($daftar as $item) {
            MataKuliah::create($item);
        }
    }
}
