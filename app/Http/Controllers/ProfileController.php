<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        if (Auth::guard('web')->check()) {
            return view('profile', [
                'user' => Auth::user(),
                'ownProfile' => true
            ]);
        }

        return view('company.profile', [
            'user' => Auth::guard('company')->user(),
            'ownProfile' => true
        ]);
    }

    public function update(Request $request)
    {
        if (Auth::guard('web')->check()) {
            $validatedData = $request->validate([
                'username' => 'required|min:3|max:255|unique:users,username,' . Auth::user()->id,
                'email' => 'required|email|unique:users,email,' . Auth::user()->id,
                'name' => 'required|max:255',
                'place_of_birth' => 'required',
                'date_of_birth' => 'required|date',
                'address' => 'required',
            ]);
            Auth::user()->update($validatedData);
        } else {
            $validatedData = $request->validate([
                'username' => 'required|min:3|max:255|unique:companies,username,' . Auth::guard('company')->user()->id,
                'email' => 'required|email|unique:companies,email,' . Auth::guard('company')->user()->id,
                'name' => 'required|max:255',
                'address' => 'required',
            ]);
            Auth::guard('company')->user()->update($validatedData);
        }

        return redirect()->back()->with('success', 'Update berhasil.');
    }
}
