<x-layout title="Register Perusahaan">
    <div class="container d-flex bg-light align-items-center justify-content-center py-5">
        <form class="bg-white p-5 rounded shadow-sm container" action='/register/company' method='POST'>
            @csrf
            <div class="mb-5 text-center">
                <h1 class="fw-bold montserrat">Register Perusahaan</h1>
                <hr>
            </div>

            <x-floating-input type="text" id="username">Username</x-floating-input>
            <x-floating-input type="email" id="email">Alamat Email</x-floating-input>
            <x-floating-input type="password" id="password">Password</x-floating-input>
            <x-floating-input type="password" id="password_confirmation">Konfirmasi Password</x-floating-input>
            <hr>
            <x-floating-input type="text" id="name">Nama Perusahaan</x-floating-input>
            <x-floating-input type="text" id="address">Alamat Perusahaan</x-floating-input>

            <button type="submit" class="btn btn-primary me-1">Register</button>
        </form>
    </div>
</x-layout>
