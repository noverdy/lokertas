<x-layout title="Berkas Anda">
    <div class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-2 mb-5 mb-sm-0">
                    <img src="{{ asset('img/company.jpg') }}" width="100%" class="rounded-circle shadow"
                        alt="Profile Logo">
                </div>
                <div class="col-md-6">
                    <h1 class="display-6 fw-bold montserrat">{{ Auth::user()->name }}</h1>
                    <div class="fs-5">Berkas Anda</div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light">
        <div class="container pb-5">
            <div class="mb-2">
                @if ($applications)
                    {{ $applications->onEachSide(1)->links() }}
                @endif
            </div>
            <div class="mb-5 transition-fade">
                @forelse ($applications as $application)
                    <x-document-card :application="$application" />
                @empty
                    <div class="text-center p-5">
                        <h2 class="poppins">Tidak ada data</h2>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-layout>
