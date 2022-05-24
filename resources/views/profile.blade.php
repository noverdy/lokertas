<x-layout title="Profil">
    <div class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-2 mb-5 mb-sm-0">
                    <img src="{{ asset('img/company.jpg') }}" width="100%" class="rounded-circle shadow"
                        alt="Profile Logo">
                </div>
                <div class="col-md-6">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <h1 class="display-6 fw-bold montserrat">{{ $user->name }}</h1>
                    <div class="fs-5">
                        @if ($ownProfile)
                            Profil Anda
                        @else
                            Profil User
                        @endif
                    </div>
                    @if ($ownProfile)
                        <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#modal">Edit
                            Profil</a>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <table class="table">
                        <tr>
                            <th scope="col" class="py-3">Username</th>
                            <td scope="col" class="py-3">{{ $user->username }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="col" class="py-3">Nama</th>
                            <td scope="col" class="py-3">{{ $user->name }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="col" class="py-3">Email</th>
                            <td scope="col" class="py-3">{{ $user->email }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="col" class="py-3">Alamat</th>
                            <td scope="col" class="py-3">{{ $user->address }}</td>
                        </tr>
                        <tr>
                            <th scope="col" class="py-3">Tanggal Lahir</th>
                            <td scope="col" class="py-3">{{ $user->date_of_birth->format('d F Y') }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="col" class="py-3">Kota Tempat Lahir</th>
                            <td scope="col" class="py-3">{{ $user->place_of_birth }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @if ($ownProfile)
        @push('modal')
            <div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Edit Profil</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="/profile" method="post">
                            @method('put')
                            @csrf
                            <div class="modal-body">
                                <x-floating-input type="text" id="username" value="{{ $user->username }}">
                                    Username</x-floating-input>
                                <x-floating-input type="text" id="name" value="{{ $user->name }}">
                                    Nama Perusahaan</x-floating-input>
                                <x-floating-input type="email" id="email" value="{{ $user->email }}">
                                    Email</x-floating-input>
                                <x-floating-input type="text" id="address" value="{{ $user->address }}">
                                    Alamat</x-floating-input>
                                <input name="date_of_birth" value="{{ $user->date_of_birth->format('Y-m-d') }}" required
                                    type="date" class="form-control mb-3 @error('date_of_birth') is-invalid @enderror"
                                    placeholder=" " style="height: 3.8rem">
                                @error('date_of_birth')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <x-floating-input type="text" id="place_of_birth" value="{{ $user->place_of_birth }}">
                                    Kota Tempat Lahir</x-floating-input>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endpush
    @endif
</x-layout>
