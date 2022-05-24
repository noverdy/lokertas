<?php

use App\Http\Controllers\ApplicationController;
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

Route::group(['middleware' => 'auth:company'], function () {
    Route::get('/vacancy/create', [VacancyController::class, 'create']);
    Route::post('/vacancy/create', [VacancyController::class, 'store']);
    Route::delete('vacancy/{vacancy}', [VacancyController::class, 'destroy']);
});

Route::group(['middleware' => 'auth:web,company'], function () {
    Route::get('/user/{user}', [UserController::class, 'show']);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::put('/profile', [ProfileController::class, 'update']);
    Route::get('vacancy/{vacancy}', [VacancyController::class, 'show']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/documents', [ApplicationController::class, 'index']);
    Route::get('/company/{company}', [CompanyController::class, 'show']);
    Route::post('/vacancy/{vacancy}', [ApplicationController::class, 'store']);
});

Route::group(['middleware' => 'guest:company'], function () {
    Route::get('/vacancy', [VacancyController::class, 'index']);
    Route::get('/company', [CompanyController::class, 'index']);
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

Route::get('/', [HomeController::class, 'index']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::view('/faq', 'faq');
Route::view('/terms-and-conditions', 'terms-and-conditions');
Route::view('/privacy-policy', 'privacy-policy');
