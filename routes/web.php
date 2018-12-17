<?php

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
Route::resource('isian','Isian'); //tambahkan baris ini
// Route::get('/', function () {
//      return view('isian');
// });
Route::get('/', function () {
    return view('korporat');
});
Route::get('/cLaporan', function () {
    return view('create_laporan');
});
Route::get('/masyarakat', function () {
    return view('masyarakat');
});
Route::get('/dokumentasi', function () {
    return view('dokumentasi');
});
Route::get('/masyarakat2', function () {
    return view('masyarakat2');
});
Route::get('/sosialisasi', function () {
    return view('sosialisasi');
});
Route::get('/utama', function () {
    return view('utama');
});


