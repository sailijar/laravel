<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/cth', function () {
//     return view('contoh');
// });

// Route::fallback(function () {
//     return view('notfound');
// });

// Route::get('/hello/hello2/hellolagi', function () {
//     echo "helo word";
// });

// Route::get('/mahasiswa/{nama}', function ($nama) {
//     echo "ini halaman mahasiswa dengan nama $nama";
// });

// Route::get('/mahasiswa', function () {
//     $kelas = "IS62";
//     $data = ["sailijar","lijar","adha"];

//     return view('mahasiswa.index',compact('kelas','data'));
// });

Route::get('mahasiswa',function () {
    $nama = "Sailijar";
    $nilai = 68;

    $nilai2 = [85,70,50,70,35,100];

    return view('mahasiswa',compact('nama','nilai','nilai2'));
});
