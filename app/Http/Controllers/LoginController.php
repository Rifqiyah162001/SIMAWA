<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postLogin (Request $request){
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            switch ($user->role) {
                case 'admin':
                    return redirect('/admin');
                case 'mahasiswa':
                    return redirect('/mahasiswa');
                case 'reviewer':
                    return redirect('/reviewer');
                case 'dosen':
                    return redirect('/dosen');
                // default:
                //     # code...
                //     break;
            }
        } else {
            return redirect('/login')->withErrors(['message' => 'Username atau password salah']);
        }
    }

    public function logout (Request $request){
        Auth::logout();
        return redirect('/login');
    }
}
