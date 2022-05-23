<x-layout title="Login">
    <div class="container d-flex bg-light align-items-center justify-content-center py-5">
        <form class="bg-white p-5 rounded shadow-sm container" action='/login' method='POST'>
            @csrf
            <div class="mb-5 text-center">
                <h1 class="fw-bold montserrat">Login</h1>
                <hr>
            </div>

            <x-floating-input type="text" id="username">Alamat Email atau Username</x-floating-input>
            <x-floating-input type="password" id="password">Password</x-floating-input>

            <button type="submit" class="btn btn-primary me-1">Login</button>
            <span>Belum punya akun? <a href="/register" class="text-decoration-none">Register</a></span>

            @error('error')
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
</x-layout>
