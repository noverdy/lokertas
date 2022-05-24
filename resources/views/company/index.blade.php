<x-layout title="Perusahaan Anda" transition="off">
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
            @if ($vacancies)
                {{ $vacancies->links() }}
            @endif

            @forelse($vacancies as $vacancy)
                <x-company.job-card :vacancy="$vacancy" />
            @empty
                <h1>Belum ada Lowongan</h1>
            @endforelse
        </div>
    </div>
</x-layout>
