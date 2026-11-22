<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data['judul'] = 'Data Admin';
        $data['admins'] = Admin::all();

        return view('admin.index', $data);
    }

    public function create()
    {
        $data['judul'] = 'Tambah Data Admin';

        return view('admin.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_admin' => 'required|integer|unique:admins,id_admin',
            'username' => 'required|string|max:100',
            'password' => 'required|string|max:100',
        ]);

        Admin::create([
            'id_admin' => $request->id_admin,
            'username' => $request->username,
            'password' => $request->password,
        ]);

        return redirect('/admin')->with('success', 'Data admin berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data Admin';
        $data['admin'] = Admin::findOrFail($id);

        return view('admin.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:100',
            'password' => 'required|string|max:100',
        ]);

        $admin = Admin::findOrFail($id);
        $admin->update([
            'username' => $request->username,
            'password' => $request->password,
        ]);

        return redirect('/admin')->with('success', 'Data admin berhasil diubah.');
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect('/admin')->with('success', 'Data admin berhasil dihapus.');
    }
}