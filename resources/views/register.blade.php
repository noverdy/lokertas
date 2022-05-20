<x-layout title="Register">
    <div class="d-flex bg-light align-items-center justify-content-center py-5">
        <form class="bg-white p-5 rounded shadow-sm container" action='/register' method='POST'>
            @csrf
            <div class="mb-5 text-center">
                <h1 class="fw-bold montserrat">Register</h1>
                <hr>
            </div>

            <div class="form-floating mb-3">
                <input name="username" value="{{ old('username') }}" required type="text"
                    class="form-control @error('username') is-invalid @enderror" id="usernameInput" placeholder=" ">
                <label for="usernameInput">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input name="email" value="{{ old('email') }}" required type="email"
                    class="form-control @error('email') is-invalid @enderror" id="emailInput" placeholder=" ">
                <label for="emailInput">Alamat Email</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input name="password" required type="password"
                    class="form-control @error('password') is-invalid @enderror" id="passwordInput" placeholder=" ">
                <label for="passwordInput">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input name="password_confirmation" required type="password"
                    class="form-control @error('password_confirmation') is-invalid @enderror" id="passwordConfirmInput"
                    placeholder=" ">
                <label for="passwordConfirmInput">Konfirmasi Password</label>
                @error('password_confirmation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <hr>

            <div class="form-floating mb-3">
                <input name="name" value="{{ old('name') }}" required type="text"
                    class="form-control @error('name') is-invalid @enderror" id="nameInput" placeholder=" ">
                <label for="nameInput">Nama</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="row align-items-center mb-3">
                <div class="col">
                    <input name="place_of_birth" placeholder="Tempat Lahir" value="{{ old('place_of_birth') }}"
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

            <div class="form-floating mb-3">
                <input name="address" value="{{ old('address') }}" required type="text"
                    class="form-control @error('address') is-invalid @enderror" id="addressInput" placeholder=" ">
                <label for="addressInput">Alamat</label>
                @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary me-1">Register</button>
            <span>Sudah punya akun? <a href="/login" class="text-decoration-none">Login</a></span>
        </form>
    </div>
</x-layout>
