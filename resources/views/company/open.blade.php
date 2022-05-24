<x-layout title="Buka Lowongan">
    <div class="container">
        <form class="bg-white p-5 rounded shadow-sm container" action='/vacancy/create' method='POST'>
            @csrf
            <div class="mb-5 text-center">
                <h1 class="fw-bold montserrat">Buka Lowongan</h1>
                <hr>
            </div>

            <x-floating-input type="text" id="title">Judul Lowongan</x-floating-input>
            <x-floating-input type="text" id="description">Deskripsi Pekerjaan</x-floating-input>
            <hr>
            <x-floating-input type="text" id="street">Alamat Pekerjaan</x-floating-input>
            <x-floating-input type="text" id="city">Kota/Kabupaten</x-floating-input>
            <x-floating-input type="text" id="province">Provinsi</x-floating-input>
            <x-floating-input type="text" id="postal_code">Kode Pos</x-floating-input>
            <hr>
            <x-floating-input type="text" id="requirement">Persyaratan</x-floating-input>
            <x-floating-input type="text" id="salary">Gaji</x-floating-input>

            <button type="submit" class="btn btn-primary me-1">Buka Lowongan</button>
        </form>
    </div>
</x-layout>
