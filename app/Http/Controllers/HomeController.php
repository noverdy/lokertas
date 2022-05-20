<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function index()
    {
        $req = Request::create('/api/v1/lowongan', 'GET');
        $res = Route::dispatch($req);
        return view('index', [
            'lowongans' => $res->getData()
        ]);
    }
}
