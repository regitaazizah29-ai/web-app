<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index()
    {
        $data['judul'] = 'CRUD data Pegawai';
        $data['employes'] = Employe::all();

        return view('tampil_data', $data);
    }

    public function create()
    {
        $data['judul'] = 'Tambah Data Pegawai';

        return view('tambah_data', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id'     => 'required|integer|unique:employes,id',
            'nama'   => 'required|string|max:30',
            'alamat' => 'required|string',
            'gender' => 'required|in:L,P',
            'gaji'   => 'required|integer',
        ]);

        Employe::create([
            'id'     => $request->id,
            'nama'   => $request->nama,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'gaji'   => $request->gaji,
        ]);

        return redirect('/employe')->with('success', 'Data pegawai berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data Pegawai';
        $data['employe'] = Employe::findOrFail($id);

        return view('edit_data', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'   => 'required|string|max:30',
            'alamat' => 'required|string',
            'gender' => 'required|in:L,P',
            'gaji'   => 'required|integer',
        ]);

        $employe = Employe::findOrFail($id);
        $employe->update([
            'nama'   => $request->nama,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'gaji'   => $request->gaji,
        ]);

        return redirect('/employe')->with('success', 'Data pegawai berhasil diubah.');
    }

    public function destroy($id)
    {
        $employe = Employe::findOrFail($id);
        $employe->delete();

        return redirect('/employe')->with('success', 'Data pegawai berhasil dihapus.');
    }
}