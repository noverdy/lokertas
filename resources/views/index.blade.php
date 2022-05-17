@extends('template', ['title' => 'Lowongan Kerja Disabilitas'])

@section('body')
    <div class="bg-light" style="padding: 8rem 0">
        <div class="container text-center">
            <h1 class="display-1 fw-bold montserrat">Wadah untuk Para Pejuang!</h1>
            <p class="fs-5 mb-5">Jalani hidup dengan optimis, jadikan keterbatasan sebagai kekuatan!</p>
            <a href="/lowongan" class="btn text-white btn-lg rounded-pill" style="background: #F57343">Lihat
                Lowongan</a>
        </div>
    </div>

    <div class="p-5 bg-light">
        <div class="container py-5 text-center">
            <h5 class="fs-5 text-success poppins" style="letter-spacing: 0.15rem">Bagaimana caranya?</h5>
            <h3 class="display-6 fw-bold mb-4 montserrat">Langkah Mudah untuk Dapatkan Pekerjaan!</h3>
            <div class="row gx-5 my-5">
                <x-main-card fg="864BD8" bg="EBDDFD" icon="fa-envelope" title="Daftarkan Akunmu">
                    Daftar akun pada website Lokertas
                </x-main-card>
                <x-main-card fg="F8C546" bg="FFF0CD" icon="fa-folder-open" title="Siapkan Berkas">
                    Lihat berkas yang dibutuhkan
                </x-main-card>
                <x-main-card fg="F57343" bg="FFE8E0" icon="fa-briefcase" title="Daftar Kerja">
                    Daftar kerja pada lowongan kerja!
                </x-main-card>
            </div>
        </div>
    </div>

    <div class="p-5" style="background: #EFEEF3">
        <div class="container py-5">
            <h5 class="fs-5 poppins" style="letter-spacing: 0.15rem; color: #864BD8">Pekerjaan di sekitarmu</h5>
            <h1 class="montserrat fw-bold">Pekerjaan Unggulan</h1>
            <div class="py-5 my-5 text-center fw-bold">
                <p>Sayang sekali, untuk lowongan pekerjaan masih belum selesai dibuat oleh Developer.</p>

                <p>Mohon menunggu ya :)</p>
            </div>
            <a href="/lowongan" class="btn text-white" style="background: #F57343">Lihat
                Lebih Banyak</a>
        </div>
    </div>

    <div class="p-5 bg-light">
        <div class="container py-5 text-center">
            <h5 class="fs-5 poppins" style="letter-spacing: 0.15rem; color: #F57343">9+ Kategori Pekerjaan</h5>
            <h3 class="display-6 fw-bold mb-4 montserrat">Cari Berdasarkan Kategori</h3>
            <div class="row gx-5 my-5">
                <x-main-card fg="01B075" bg="E4F7F1" icon="fa-pen-fancy" title="Pekerjaan A">
                    x Lowongan
                </x-main-card>
                <x-main-card fg="FB5F1C" bg="FFEAE0" icon="fa-briefcase" title="Pekerjaan C">
                    x Lowongan
                </x-main-card>
                <x-main-card fg="FFB200" bg="F8F0DE" icon="fa-gear" title="Pekerjaan R">
                    x Lowongan
                </x-main-card>
                <x-main-card fg="864BD8" bg="EAE1F6" icon="fa-paper-plane" title="Pekerjaan I">
                    x Lowongan
                </x-main-card>
            </div>
            <a href="/kategori" class="btn text-white" style="background: #F57343">Lihat
                Lebih Banyak</a>
        </div>
    </div>

    <div class="bg-light d-flex justify-content-center">
        <div class="me-1" style="background: #864BD8; width: 2rem; height: 0.15rem"></div>
        <div style="background: #c0acdc; width: 3rem; height: 0.15rem"></div>
    </div>

    <div class="p-5 bg-light">
        <div class="container py-5 text-center">
            <h5 class="fs-5 text-success poppins" style="letter-spacing: 0.15rem">Testimoni</h5>
            <h3 class="display-6 fw-bold mb-4 montserrat">Review Mereka</h3>

            <div class="row gy-2 justify-content-center mt-5">
                <div class="col-5">
                    <img src="{{ url('img/review.jpg') }}" width=300 class="rounded-5 shadow">
                </div>
                <div class="col-4 text-start">
                    <h5>John Doe</h5>
                    <p>Pekerja</p>

                    <p class="fst-italic">"Sangat membantu."</p>
                    <span class="text-warning"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i></span>
                </div>
            </div>
        </div>
    </div>
@endsection
