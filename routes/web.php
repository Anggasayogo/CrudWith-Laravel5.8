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
//with function clouser
// Route::get('/', function () {
//     return view('layout/master');
// });
// Route::get('/about', function () {
//     $nama = 'Angga Maulana';
//     return view('/about', ['nama' => $nama]);
// });
//with controller pages
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
//with controller Mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index');
//with controller Students
Route::get('students', 'StudentsController@index');
Route::get('detailstudent/{student}', 'StudentsController@show');
Route::get('/tambahdatastudent', 'StudentsController@create');
Route::post('/tambahdatastudent', 'StudentsController@store');
Route::delete('hapus/{student}', 'StudentsController@destroy');
Route::get('ubah/{student}', 'StudentsController@edit');
Route::patch('actionubah/{student}', 'StudentsController@update');
