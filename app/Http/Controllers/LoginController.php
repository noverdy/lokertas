<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->to('lowongan');
        }

        $credentials['email'] = $credentials['username'];
        unset($credentials['username']);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->to('lowongan');
        }

        return back()->withInput()->withErrors([
            'email' => 'Data tidak sesuai.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
