<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::guard('company')->check()) {
            return view('company.index', [
                'vacancies' => Auth::guard('company')->user()->vacancies()->paginate(10)
            ]);
        }

        return view('index', [
            'vacancies' => Vacancy::all()->random(6)
        ]);
    }
}
