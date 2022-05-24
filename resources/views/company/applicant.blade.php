<x-layout>
    <div class="container py-5">
        <div class="row">
            @if (session('success'))
                <div class="alert alert-success mt-3 text-center" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="col text-center">
                <h1 class="display-1 fw-bold montserrat">Informasi Lowongan</h1>
            </div>
        </div>
        <div class="row justify-content-between pt-5">
            <div class="col-12 col-md-6">
                <div class="fw-semibold">Judul Lowongan</div>
                <div class="mb-4">{{ $vacancy->title }}</div>
                <div class="fw-semibold">Nama Perusahaan</div>
                <div class="mb-4">{{ $vacancy->company->name }}</div>
                <div class="fw-semibold">Alamat Pekerjaan</div>
                <div class="mb-4">
                    {{ "$vacancy->street, $vacancy->city, $vacancy->province, $vacancy->postal_code" }}
                </div>
                <div class="fw-semibold">Deskripsi Pekerjaan</div>
                <div class="mb-4 mb-md-0">{{ $vacancy->description }}</div>
            </div>
            <div class="col-12 col-md-5">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="fw-semibold">Persyaratan</div>
                        <div class="mb-4">{{ $vacancy->requirement }}</div>
                        <div class="fw-semibold">Gaji per Bulan</div>
                        <div>{{ $vacancy->salary }}</div>
                    </div>
                </div>
                <form action="/vacancy/{{ $vacancy->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus Lowongan</button>
                </form>
            </div>
        </div>
    </div>
    <div style="background: #EFEEF3">
        <div class="container py-5">
            <div class="text-center">
                <h2 class="montserrat fw-semibold mb-4">Daftar Pelamar</h2>
            </div>
            <div class="mb-2">
                @if ($applications)
                    {{ $applications->onEachSide(1)->links() }}
                @endif
            </div>
            <div class="row transition-fade">
                <table class="table table-striped align-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col" class="w-25">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($applications as $application)
                            <tr scope="row">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $application->user->name }}</td>
                                <td>{{ $application->user->email }}</td>
                                <td>
                                    <a href="/user/{{ $application->user->id }}" class="btn btn-primary">Detail
                                        Pelamar</a>
                                    <a href="/storage/documents/{{ $application->document }}" target="_blank"
                                        class="btn btn-orange">Unduh Berkas</a>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan=4>
                                    <span class="poppins">Tidak ada data</span>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
