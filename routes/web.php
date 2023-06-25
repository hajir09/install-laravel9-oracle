<?php

use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    try {
        DB::connection()->getPdo();
        echo 'Koneksi ke database Oracle berhasil!';
    } catch (\Exception $e) {
        return 'Gagal terhubung ke database Oracle: ' . $e->getMessage();
    }

    return view('welcome');
});
