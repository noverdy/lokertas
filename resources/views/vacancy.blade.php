<x-layout title="Lowongan" transition="off">
    <div class="bg-light py-5">
        <div class="container text-center">
            <h1 class="display-1 fw-bold montserrat">Lowongan</h1>
            <p class="fs-5 mb-5">Daftar Lowongan yang tersedia di Lokertas</p>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-3 mb-4">
                <form action="/vacancy" method="get">
                    <div class="input-group mb-3">
                        <input name="search" type="text" class="form-control" placeholder="Cari.."
                            value="{{ request('search') }}">
                        <button class="btn btn-orange" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row g-5 mb-5">
            @if ($vacancies)
                {{ $vacancies->onEachSide(1)->links() }}
            @endif
            @forelse ($vacancies as $vacancy)
                <x-job-card :vacancy="$vacancy" />
            @empty
                <h2 class="poppins">Tidak ada data</h2>
            @endforelse
        </div>
    </div>
</x-layout>
