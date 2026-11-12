<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Data array mahasiswa sesuai soal
        $mahasiswa = [
            ['nama' => 'andy', 'alamat' => 'Surabaya', 'gender' => 'L'],
            ['nama' => 'febyan', 'alamat' => 'Kediri', 'gender' => 'L'],
            ['nama' => 'ybeth', 'alamat' => 'Malang', 'gender' => 'L'],
            ['nama' => 'pradana', 'alamat' => 'Surabaya', 'gender' => 'L'],
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}