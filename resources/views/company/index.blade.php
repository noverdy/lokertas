<x-layout title="Perusahaan Anda" transition="off">
    <div class="bg-light py-5 mb-5`">
        <div class="container text-center">
            @if (session('success'))
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
            <div class="mb-2">
                @if ($vacancies)
                    {{ $vacancies->onEachSide(1)->links() }}
                @endif
            </div>
            <div class="mb-5 transition-fade">
                @forelse ($vacancies as $vacancy)
                    <x-company.job-card :vacancy="$vacancy" />
                @empty
                    <div class="text-center">
                        <h2 class="poppins">Tidak ada data</h2>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-layout>
