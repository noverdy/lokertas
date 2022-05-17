@extends('template')

@section('body')
    <div class="d-flex bg-light align-items-center justify-content-center py-5">
        <form class="bg-white p-5 rounded shadow-sm container" action='/login' method='POST'>
            @csrf
            <div class="mb-5 text-center">
                <h1 class="fw-bold montserrat">Login</h1>
                <hr>
            </div>
            <div class="form-floating mb-3">
                <input name="username" value="{{ old('username') }}" required type="text" class="form-control"
                    id="usernameInput" placeholder=" ">
                <label for="usernameInput">Alamat Email atau Username</label>
            </div>
            <div class="form-floating mb-3">
                <input name="password" required type="password" class="form-control" id="passwordInput" placeholder=" ">
                <label for="passwordInput">Password</label>
            </div>
            <button type="submit" class="btn btn-primary me-1">Login</button>
            <span>Belum punya akun? <a href="/register" class="text-decoration-none">Register</a></span>

            @error('email')
                <div class="alert alert-danger mt-3 text-center" role="alert">
                    {{ $message }}
                </div>
            @enderror

            @if (session()->has('success'))
                <div class="alert alert-success mt-3 text-center" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </form>
    </div>
@endsection
