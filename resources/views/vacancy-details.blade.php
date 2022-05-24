<x-layout>
    <div class="container py-5">
        <div class="row">
            @if (session('success'))
                <div class="alert alert-success mt-3 text-center" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="col text-center">
                <h1 class="display-1 fw-bold montserrat">Informasi Pekerjaan</h1>
                <p class="fs-5">Baca terlebih dahulu informasi pekerjaan sebelum menyerahkan berkas Anda.</p>
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
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="fw-semibold">Persyaratan</div>
                        <div class="mb-4">{{ $vacancy->requirement }}</div>
                        <div class="fw-semibold">Gaji per Bulan</div>
                        <div>{{ $vacancy->salary }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background: #EFEEF3">
        <div class="container py-5">
            <div class="row">
                @if ($applied)
                    <div class="text-center">
                        <h3 class="poppins mb-4">Anda sudah mendaftar di Lowongan ini.</h3>
                        <a href="/vacancy" class="btn btn-orange">Lihat Lowongan lain</a>
                    </div>
                @else
                    <div class="col col-md-6">
                        <h2 class="fw-bold montserrat">Daftar</h2>
                        <div class="mb-3">Pastikan Anda telah membaca ketentuan dan persyaratan sebelum
                            menyerahkan berkas.</div>
                        <form action="/vacancy/{{ $vacancy->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Unggah berkas persyaratan Anda di
                                    sini.</label>
                                <input name="document" class="form-control @error('document') is-invalid @enderror"
                                    type="file" required>
                                @error('document')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class=" form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Dengan ini saya menyetujui <a href="/terms-and-conditions">Syarat dan Ketentuan</a>
                                    Lokertas dan
                                    Perusahaan pembuka
                                    lowongan.
                                </label>
                            </div>
                            <button type="submit" class="btn btn-orange">Submit</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>

</x-layout>
