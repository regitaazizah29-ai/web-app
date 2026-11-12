<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function product()
    {
        return view('product');
    }

    public function about()
    {
        return view('about');
    }

    public function detail($harga)
    {
        // Menentukan nama produk berdasarkan harga yang dikirim melalui URL parameter
        $namaProduk = '';
        if ($harga == 300000) {
            $namaProduk = 'Sepatu';
        } elseif ($harga == 200000) {
            $namaProduk = 'Baju';
        } elseif ($harga == 150000) {
            $namaProduk = 'Celana';
        } else {
            $namaProduk = 'Produk Tidak Ditemukan';
        }

        return view('detail', compact('namaProduk', 'harga'));
    }
}
