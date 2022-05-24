<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancies = Vacancy::latest();

        if (request('search')) {
            $vacancies->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('city', 'like', '%' . request('search') . '%')
                ->orWhereRelation('company', 'name', 'like', '%' . request('search') . '%');
        }

        return view('vacancy', [
            'vacancies' => $vacancies->paginate(12)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.open');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'street' => 'required',
            'city' => 'required',
            'province' => 'required',
            'postal_code' => 'required|digits:5',
            'requirement' => 'required|min:3|max:255',
            'salary' => 'required|min:3|max:255|numeric',
        ]);

        $validatedData['company_id'] = Auth::guard('company')->user()->id;
        $validatedData['salary'] = 'Rp' . number_format($validatedData['salary'], 0, ',', '.');

        Vacancy::create($validatedData);

        $request->session()->flash('success', 'Lowongan berhasil dibuka!');

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function show(Vacancy $vacancy)
    {
        if (Auth::guard('web')->check()) {
            return view('vacancy-details', [
                'vacancy' => $vacancy,
                'applied' => (Auth::user()->applications()->where('vacancy_id', '=', $vacancy->id)->count() > 0)
            ]);
        }

        if (Auth::guard('company')->user()->vacancies()->where('id', '=', $vacancy->id)->count() === 0) {
            return redirect()->back();
        }

        return view('company.applicant', [
            'vacancy' => $vacancy,
            'applications' => $vacancy->applications()->paginate(10)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacancy $vacancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacancy $vacancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacancy $vacancy)
    {
        if ($vacancy->company->id === Auth::guard('company')->user()->id) {
            $vacancy->delete();
        }
        return redirect('/');
    }
}
