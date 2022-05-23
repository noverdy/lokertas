<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::guard('company')->check()) {
            return view('company.index', [
                'vacancies' => Auth::guard('company')->user()->vacancies
            ]);
        }

        $req = Request::create('/api/v1/lowongan', 'GET');
        $res = Route::dispatch($req);
        return view('index', [
            'lowongans' => $res->getData()
        ]);
    }
}
