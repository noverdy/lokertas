<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/lowongan', function () {
    return [
        [
            'slug' => 'pelukis-profesional',
            'perusahaan' => 'Lukis Abadi',
            'created_at' => '5 hari lalu',
            'title' => 'Pelukis profesional untuk seni dimensi dua',
            'location' => 'Tanah Bumbu',
        ], [
            'slug' => 'ppl-senior',
            'perusahaan' => 'Kodecorp',
            'created_at' => '2 hari lalu',
            'title' => 'Pengembang perangkat lunak senior',
            'location' => 'Tangerang Selatan',
        ],
        [
            'slug' => 'streamer-twitch',
            'perusahaan' => 'Twitch Indonesia',
            'created_at' => '7 hari lalu',
            'title' => 'Streamer kategori game',
            'location' => 'Jakarta',
        ],
        [
            'slug' => 'guru-sd',
            'perusahaan' => 'PT Bejo Suka Pintar',
            'created_at' => '4 hari lalu',
            'title' => 'Guru di sekolah SD',
            'location' => 'Tulungagung',
        ],
        [
            'slug' => 'sales-basket',
            'perusahaan' => 'Nike',
            'created_at' => '6 hari lalu',
            'title' => 'Sales untuk produk kategori basket',
            'location' => 'Banyumas',
        ],
        [
            'slug' => 'supir-taksi',
            'perusahaan' => 'Taksindo',
            'created_at' => '1 hari lalu',
            'title' => 'Supir taksi untuk kendaraan roda empat',
            'location' => 'Sanggau',
        ],
    ];
});
