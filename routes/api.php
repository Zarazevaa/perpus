<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', 'PetugasController@register');
Route::post('login', 'PetugasController@login');
Route::post('/simpan_buku','bukucontroller@store')->middleware('jwt.verify');
Route::put('/ubah_buku/{id}','bukucontroller@update')->middleware('jwt.verify');
Route::delete('/hapus_buku/{id}','bukucontroller@destroy')->middleware('jwt.verify');
Route::get('/tampil_buku','bukucontroller@tampil_buku')->middleware('jwt.verify');

Route::post('/simpan_anggota','anggotacontroller@store')->middleware('jwt.verify');
Route::put('/ubah_anggota/{id}','anggotacontroller@update')->middleware('jwt.verify');
Route::delete('/hapus_anggota/{id}','anggotacontroller@destroy')->middleware('jwt.verify');
Route::get('/tampil_anggota','anggotacontroller@tampil_anggota')->middleware('jwt.verify');
//
// Route::get('index','PeminjamanController@index')->middleware('jwt.verify');
Route::post('simpan','PeminjamanController@store')->middleware('jwt.verify');
Route::put('/ubah/{id}','PeminjamanController@update')->middleware('jwt.verify');
Route::delete('hapus/{id}','PeminjamanController@destroy')->middleware('jwt.verify');
Route::get("tampil","PeminjamanController@tampil_pinjam")->middleware('jwt.verify');

Route::post('/simpan_detail','PeminjamanController@simpan')->middleware('jwt.verify');
Route::put('/ubah_detail/{id}','PeminjamanController@ubah')->middleware('jwt.verify');
Route::delete('/hapus_detail/{id}','PeminjamanController@hapus')->middleware('jwt.verify');
Route::get('/tampil_detail','PeminjamanController@index')->middleware('jwt.verify');
