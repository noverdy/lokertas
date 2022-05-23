<x-layout title="Perusahaan Anda">
    <div class="bg-light py-5">
        <div class="container text-center">
            @if (session()->has('success'))
                <div class="alert alert-success mt-3 text-center" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <h1 class="display-2 fw-bold montserrat">Halo, {{ Auth::guard('company')->user()->name }}</h1>
            <p class="fs-5 mb-4">Berikut adalah Lowongan yang sedang Anda buka.</p>
            <a href="/vacancy/create" class="btn btn-orange">Buka Lowongan Baru</a>
        </div>
    </div>
    <div class="bg-light">
        <div class="container">
            <table class="table table-striped mb-0 pb-5">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lowongan</th>
                        <th scope="col">Gaji</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse($vacancies as $vacancy)
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $vacancy->title }}</td>
                            <td>{{ $vacancy->salary }}</td>
                            <td>
                                <a href="/vacancy/{{ $vacancy->id }}">Details</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Belum ada lowongan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
