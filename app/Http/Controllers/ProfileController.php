<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        if (Auth::guard('company')->check()) {
            return view('company.profile');
        }

        return view('profile');
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:3|max:255|unique:companies,username,' . Auth::guard('company')->user()->id,
            'email' => 'required|email|unique:companies,email,' . Auth::guard('company')->user()->id,
            'name' => 'required|max:255',
            'address' => 'required',
        ]);

        Auth::guard('company')->user()->update($validatedData);

        return redirect()->back()->with('success', 'Update berhasil.');
    }
}
