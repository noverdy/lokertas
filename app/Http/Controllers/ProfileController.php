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
}
