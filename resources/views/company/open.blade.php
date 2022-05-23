<x-layout title="Buka Lowongan">
    <div class="container">
        <form class="bg-white p-5 rounded shadow-sm container" action='/vacancy' method='POST'>
            @csrf
            <div class="mb-5 text-center">
                <h1 class="fw-bold montserrat">Buka Lowongan</h1>
                <hr>
            </div>

            <x-floating-input type="text" id="title">Judul Lowongan</x-floating-input>
            <x-floating-input type="text" id="description">Deskripsi Pekerjaan</x-floating-input>
            <x-floating-input type="text" id="address">Alamat Pekerjaan</x-floating-input>
            <x-floating-input type="text" id="requirement">Persyaratan</x-floating-input>
            <x-floating-input type="text" id="salary">Gaji</x-floating-input>

            <button type="submit" class="btn btn-primary me-1">Buka Lowongan</button>
        </form>
    </div>
</x-layout>
