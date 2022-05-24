<x-layout title="FAQ">
    <div class="bg-light" style="padding: 8rem 0 2rem 0">
        <div class="container text-center">
            <h1 class="display-1 fw-bold montserrat">Pertanyaan Umum</h1>
            <p class="fs-5 mb-5">(Frequently Asked Questions)</p>
        </div>

        <div style="margin: 0 23rem 2rem">
            <div class="d-flex justify-content-between" role="button" data-bs-toggle="collapse"
                data-bs-target="#description" aria-expanded="false" aria-controls="description">
                <span>Apa itu Lokertas?</span>
                <i class="fa-solid fa-caret-down"></i>
            </div>
            <hr>
            <div class="collapse" id="description">
                <div>
                    Lokertas merupakan sebuah sistem informasi yang dapat mempermudah dan membantu para penyandang
                    disabilitas dalam mencari pekerjaan yang sesuai dengan keterampilan yang dimiliki tanpa perlu
                    mendatangi satu persatu perusahaan secara langsung. Lokertas hadir untuk memastikan para penyandang
                    disabilitas dapat mencari lowongan pekerjaan yang cocok hanya dengan melalui perangkat yang mereka
                    miliki.
                </div>
            </div>
        </div>

        <div style="margin: 0 23rem 2rem">
            <div class="d-flex justify-content-between" role="button" data-bs-toggle="collapse"
                data-bs-target="#cara-kerja" aria-expanded="false" aria-controls="cara-kerja">
                <span>Bagaimana cara kerja Lokertas?</span>
                <i class="fa-solid fa-caret-down"></i>
            </div>
            <hr>
            <div class="collapse" id="cara-kerja">
                <div>
                    Lokertas bekerja dengan menemukan pencari kerja dengan pemberi lowongan kerja. Pemberi lowongan
                    dapat membuka beberapa lowongan dengan mengisi data-data yang dibutuhkan seperti kriteria, gaji,
                    syarat, dan yang lainnya. Pencari kerja dapat mencari pekerjaan yang sesuai diinginkan dengan
                    memanfaatkan fitur <i>search</i> yang tersedia maupun imelalui fitur pekerjaan unggulan pada <i>
                        homepage</i>.
                </div>
            </div>
        </div>

        <div style="margin: 0 23rem 2rem">
            <div class="d-flex justify-content-between" role="button" data-bs-toggle="collapse" data-bs-target="#fitur"
                aria-expanded="false" aria-controls="fitur">
                <span>Apa saja fitur Lokertas?</span>
                <i class="fa-solid fa-caret-down"></i>
            </div>
            <hr>
            <div class="collapse" id="fitur">
                <div>
                    Lokertas menyediakan fitur bagi Pelamar untuk mencari pekerjaan yang cocok berdasarkan berbagai
                    kategori yang ada. Lokertas juga menyediakan fitur bagi Perusahaan untuk mengiklankan lowongan
                    pekerjaan yang dibuka. Selain itu, Lokertas juga menyediakan berbagai fitur menarik lainnya
                    dengan tujuan utama menjadi penghubung antara penyedia kerja dengan para Pelamar.
                </div>
            </div>
        </div>

        <div style="margin: 0 23rem 2rem">
            <div class="d-flex justify-content-between" role="button" data-bs-toggle="collapse" data-bs-target="#kontak"
                aria-expanded="false" aria-controls="kontak">
                <span>Bagaimana cara menghubungi Lokertas?</span>
                <i class="fa-solid fa-caret-down"></i>
            </div>
            <hr>
            <div class="collapse" id="kontak">
                <div>
                    Jangan ragu untuk hubungi kami melalui Call Center (+62)859-5589-0236, Email
                    support@lokertas.com, atau di kantor pusat Lokertas yang berada di Sawojajar, Malang Kota.
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = () => {
            const question = document.querySelector(window.location.hash)
            if (question !== null) question.classList.add('show')
        }
    </script>
</x-layout>
