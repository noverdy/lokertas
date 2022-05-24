<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::view('/berkas', 'berkas')->middleware('auth');

Route::group(['middleware' => 'auth:web,company'], function () {
    Route::resource('/vacancy', VacancyController::class);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::put('/profile', [ProfileController::class, 'update']);
});

Route::group(['middleware' => ['guest', 'guest:company']], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);

    Route::group(['prefix' => 'register'], function () {
        Route::get('/', [LoginController::class, 'create']);

        Route::get('/user', [UserController::class, 'create']);
        Route::post('/user', [UserController::class, 'store']);

        Route::get('/company', [CompanyController::class, 'create']);
        Route::post('/company', [CompanyController::class, 'store']);
    });
});

Route::group(['middleware' => 'guest:company'], function () {
    Route::view('/perusahaan', 'perusahaan');
    Route::view('/kategori', 'kategori');
});

Route::view('/faq', 'faq');
