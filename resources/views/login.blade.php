<x-layout title="Login">
    <div class="container bg-light py-5 d-flex justify-content-center">
        <div class="bg-white rounded shadow-sm row overflow-hidden w-md-80">
            <div class="col-lg-6 p-0 d-none d-lg-block">
                <img src="{{ asset('img/login.png') }}" width="100%" alt="Login">
            </div>
            <form class="col-lg-6 p-5" action='/login' method='POST'>
                @csrf
                <div class="mb-5">
                    <h1 class="fw-bold montserrat">Login</h1>
                    <hr>
                </div>

                <x-floating-input type="text" id="username">Alamat Email atau Username</x-floating-input>
                <x-floating-input type="password" id="password" value="">Password</x-floating-input>

                <button type="submit" class="btn btn-orange me-1">Login</button>
                <span>Belum punya akun? <a href="/register" class="text-decoration-none text-orange">Register</a></span>

                @error('error')
                    <div class="alert alert-danger mt-3 text-center" role="alert">
                        {{ $message }}
                    </div>
                @enderror

                @if (session('success'))
                    <div class="alert alert-success mt-3 text-center" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            </form>
        </div>
    </div>
</x-layout>
