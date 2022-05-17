@extends('template', ['title' => 'Profil'])

@section('body')
    <div class="bg-light" style="padding: 4rem 0">
        <div class="container">
            <h1 class="montserrat fw-bold">Profil Anda</h1>
            <div>
                {{ Auth::user() }}
            </div>
        </div>
    </div>
@endsection
