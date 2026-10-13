<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = 'Dicky Devano';
        $nim = '242520142';
        $prodi = 'Teknologi Informasi';

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }
}
