<x-layout>
    <div class="bg-light h-fit d-flex align-items-center justify-content-center"
        style="background-image: url({{ asset('img/bg.jpg') }}); background-size: cover;">
        <div class="container text-center text-white" style="text-shadow: 0 2px 8px rgba(0,0,0,0.3);">
            <h1 class="display-1 fw-bold montserrat">Wadah untuk Para Pejuang!</h1>
            <p class="fs-5 mb-5">Jalani hidup dengan optimis, jadikan keterbatasan sebagai kekuatan!</p>
            <button onclick="scrollToDiv('guide')" class="btn btn-lg btn-orange rounded-pill shadow-sm">Get
                Started</button>
        </div>
    </div>

    <div class="p-5 bg-light" id="guide">
        <div class="container py-5 text-center">
            <h5 class="fs-5 text-success poppins" style="letter-spacing: 0.15rem">Bagaimana caranya?</h5>
            <h3 class="display-6 fw-bold montserrat">Langkah Mudah untuk Dapatkan Pekerjaan!</h3>
            <div class="row g-5 my-4">
                <x-main-card href="/login" fg="864BD8" bg="EBDDFD" icon="fa-envelope" title="Daftarkan Akunmu">
                    Daftar akun pada website Lokertas
                </x-main-card>
                <x-main-card href="" fg="F8C546" bg="FFF0CD" icon="fa-folder-open" title="Siapkan Berkas">
                    Lihat berkas yang dibutuhkan
                </x-main-card>
                <x-main-card href="/lowongan" fg="F57343" bg="FFE8E0" icon="fa-briefcase" title="Daftar Kerja">
                    Daftar kerja pada lowongan kerja!
                </x-main-card>
            </div>
        </div>
    </div>

    <div class="p-5" style="background: #EFEEF3">
        <div class="container py-5">
            <h5 class="fs-5 poppins" style="letter-spacing: 0.15rem; color: #864BD8">100+ Pekerjaan</h5>
            <h1 class="montserrat fw-bold">Pekerjaan Unggulan</h1>
            <div class="row g-5 mt-3 mb-5">
                @foreach ($vacancies as $vacancy)
                    <x-job-card :vacancy="$vacancy" />
                @endforeach
            </div>
            <a href="/vacancy" class="btn text-white btn-orange">Lihat
                Lebih Banyak</a>
        </div>
    </div>

    {{-- <div class="bg-light h-fit d-flex align-items-center justify-content-center">
        <div class="container py-5 text-center">
            <h5 class="fs-5 poppins" style="letter-spacing: 0.15rem; color: #F57343">Kategori Pekerjaan</h5>
            <h3 class="display-6 fw-bold montserrat">Cari Berdasarkan Kategori</h3>
            <div class="row g-5 my-4">
                <x-main-card href="/acri" fg="01B075" bg="E4F7F1" icon="fa-pen-fancy" title="Teknologi">
                    23 Lowongan
                </x-main-card>
                <x-main-card href="/crid" fg="FB5F1C" bg="FFEAE0" icon="fa-briefcase" title="Jasa">
                    41 Lowongan
                </x-main-card>
                <x-main-card href="/rido" fg="FFB200" bg="F8F0DE" icon="fa-gear" title="Kesehatan">
                    17 Lowongan
                </x-main-card>
                <x-main-card href="/idok" fg="864BD8" bg="EAE1F6" icon="fa-paper-plane" title="Pertambangan">
                    8 Lowongan
                </x-main-card>
            </div>
            <a href="/kategori" class="btn text-white mt-4 btn-orange">Lihat
                Lebih Banyak</a>
        </div>
    </div> --}}

    <div class="bg-light d-flex justify-content-center pt-5">
        <div class="me-1" style="background: #864BD8; width: 2rem; height: 0.15rem"></div>
        <div style="background: #c0acdc; width: 3rem; height: 0.15rem"></div>
    </div>

    <div class="p-5 bg-light">
        <div class="container py-5 text-center">
            <h5 class="fs-5 text-success poppins" style="letter-spacing: 0.15rem">Testimoni</h5>
            <h3 class="display-6 fw-bold mb-5 montserrat">Review Mereka</h3>

            <div class="row gy-2 justify-content-center">
                <div class="col-sm-5 mb-sm-0 mb-5">
                    <img src="{{ url('img/review.jpg') }}" width=50% class="rounded-5 shadow">
                </div>
                <div class="col-sm-4 text-start">
                    <h5>Ndara Qonnuri</h5>
                    <p>Mahasiswa</p>

                    <p class="fst-italic">"Aplikasi ini sangat membantu saya dalam mencari pekerjaan di tengah
                        pandemi ini. Terima kasih Lokertas karena telah memfasilitasi saya dalam melakukan pencarian
                        pekerjaan yang sesuai dengan kemampuan yang saya miliki."</p>
                    <span class="text-warning"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i></span>
                </div>
            </div>
        </div>
    </div>
</x-layout>
