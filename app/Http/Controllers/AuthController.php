<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function cek(Request $request)
    {
        $data = User::where('email', $request->email)->first();

        if ($data) {
            if (Hash::check($request->password, $data->password)) {
                session([
                    'email' => $request->email,
                    'logged_in' => true,
                ]);

                return redirect('/dashboard');
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}