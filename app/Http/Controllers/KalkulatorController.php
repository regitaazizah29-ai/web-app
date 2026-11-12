<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    // menampilkan form perhitungan
    public function home()
    {
        $data['judul'] = 'Kalkulator Sederhana';
        $data['angka1'] = 0;
        $data['angka2'] = 0;
        $data['hasil'] = 0;
        return view('kalkulator', $data);
    }

    // proses perkalian
    public function proses(Request $request) 
    {
        $data['judul'] = 'Kalkulator Sederhana';

        // menangkap input dari form
        $data['angka1'] = $request->input('angka1');
        $data['angka2'] = $request->input('angka2');

        // perkalian
        $data['hasil'] = $data['angka1'] * $data['angka2'];

        // render ke view
        return view('kalkulator', $data);
    }

    // Menampilkan form / hasil perhitungan luas segitiga
    public function segitiga(Request $request)
    {
        $alas = $request->input('alas', 0);
        $tinggi = $request->input('tinggi', 0);
        
        // Rumus Luas Segitiga = 1/2 * alas * tinggi
        $luas = 0.5 * $alas * $tinggi;

        return view('segitiga', compact('alas', 'tinggi', 'luas'));
    }
}