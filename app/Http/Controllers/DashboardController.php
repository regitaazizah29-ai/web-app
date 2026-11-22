<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function home()
    {
        $data['judul'] = 'Laman Home';
        $data['isi'] = 'Lorem ipsum dolor sit amet';

        return view('home', $data);
    }

    public function gallery()
    {
        $data['judul'] = 'Laman Gallery';

        return view('gallery', $data);
    }

    public function about()
    {
        $data['judul'] = 'Laman About';
        $data['isi'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';

        return view('about', $data);
    }
}