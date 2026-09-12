<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $daftarMahasiswa = [
            ['nim' => 'H1H024001', 'nama' => 'Lulu', 'angkatan' => 2024],
            ['nim' => 'H1H024002', 'nama' => 'Mbah Nurul', 'angkatan' => 2024],
            ['nim' => 'H1H024003', 'nama' => 'haji Habibi', 'angkatan' => 2024],
        ];

        return view('mahasiswa.index', ['daftarMahasiswa' => $daftarMahasiswa]);
    }

    public function show(string $nim)
    {
        return view('mahasiswa.show', ['nim' => $nim]);
    }

    public function cari(Request $request)
    {
        $kataKunci = $request->query('q', '');

        return response()->json([
            'kata_kunci' => $kataKunci,
            'metode' => $request->method(),
            'path' => $request->path(),
        ]);
    }
}
