<x-layout title="Profil Perusahaan">
    <div class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-2 mb-5 mb-sm-0">
                    <img src="{{ asset('img/company.jpg') }}" width="100%" class="rounded-circle shadow"
                        alt="Company Profile Logo">
                </div>
                <div class="col-md-6">
                    <h1 class="display-3 fw-bold montserrat">{{ Auth::guard('company')->user()->name }}</h1>
                    <div class="fs-5">Profil Perusahaan</div>
                    <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit
                        Profil</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <table class="table">
                        <tr>
                            <th scope="col" class="py-3">Username</th>
                            <td scope="col" class="py-3">{{ Auth::guard('company')->user()->username }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="col" class="py-3">Nama Perusahaan</th>
                            <td scope="col" class="py-3">{{ Auth::guard('company')->user()->name }}</td>
                        </tr>
                        <tr>
                            <th scope="col" class="py-3">Email</th>
                            <td scope="col" class="py-3">{{ Auth::guard('company')->user()->email }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="col" class="py-3">Alamat</th>
                            <td scope="col" class="py-3">{{ Auth::guard('company')->user()->address }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('modal')
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Profil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/profile/{{ Auth::guard('company')->user()->id }}" method="post">
                        @method('put')
                        <div class="modal-body">
                            <x-floating-input type="text" id="username">Username</x-floating-input>
                            <x-floating-input type="text" id="name">Nama Perusahaan</x-floating-input>
                            <x-floating-input type="email" id="email">Email</x-floating-input>
                            <x-floating-input type="text" id="address">Alamat</x-floating-input>
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
</x-layout>