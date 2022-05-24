<x-layout title="Perusahaan" transition="off">
    <div class="bg-light py-5">
        <div class="container text-center">
            <h1 class="display-1 fw-bold montserrat">Perusahaan</h1>
            <p class="fs-5">Daftar Perusahaan yang bekerja sama dengan Lokertas</p>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-4">
                <form action="/company" method="get">
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
        <div>
            <div class="mb-2">
                @if ($companies)
                    {{ $companies->onEachSide(1)->links() }}
                @endif
            </div>
            <div class="mb-5 transition-fade">
                @forelse ($companies as $company)
                    <x-company-card :company="$company" />
                @empty
                    <div class="text-center">
                        <h2 class="poppins">Tidak ada data</h2>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-layout>
