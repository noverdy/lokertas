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

    public function create()
    {
        return view('register.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/vacancy');
        }

        if (Auth::guard('company')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }

        $credentials['email'] = $credentials['username'];
        unset($credentials['username']);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/vacancy');
        }

        if (Auth::guard('company')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->withInput()->withErrors([
            'error' => 'Data tidak sesuai.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        Auth::guard('company')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
