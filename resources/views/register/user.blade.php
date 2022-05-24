<x-layout title="Register Pelamar">
    <div class="container d-flex bg-light align-items-center justify-content-center py-5">
        <form class="bg-white p-5 rounded shadow-sm container" action='/register/user' method='POST'>
            @csrf
            <div class="mb-5 text-center">
                <h1 class="fw-bold montserrat">Register Pelamar</h1>
                <hr>
            </div>

            <x-floating-input type="text" id="username">Username</x-floating-input>
            <x-floating-input type="email" id="email">Alamat Email</x-floating-input>
            <x-floating-input type="password" id="password">Password</x-floating-input>
            <x-floating-input type="password" id="password_confirmation">Konfirmasi Password</x-floating-input>
            <hr>
            <x-floating-input type="text" id="name">Nama</x-floating-input>

            <div class="row align-items-center mb-3">
                <div class="col">
                    <input name="place_of_birth" placeholder="Kota Tempat Lahir" value="{{ old('place_of_birth') }}"
                        required type="text" class="form-control @error('place_of_birth') is-invalid @enderror"
                        placeholder=" " style="height: 3.8rem">
                    @error('place_of_birth')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <input name="date_of_birth" value="{{ old('date_of_birth') }}" required type="date"
                        class="form-control @error('date_of_birth') is-invalid @enderror" placeholder=" "
                        style="height: 3.8rem">
                    @error('date_of_birth')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <x-floating-input type="text" id="address">Alamat</x-floating-input>

            <button type="submit" class="btn btn-primary me-1">Register</button>
        </form>
    </div>
</x-layout>
