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

Route::get('/', 'HomeController@welcome');

Route::get('/buku', 'HomeController@index');

Route::get('/buku/create', 'HomeController@create');
Route::post('/buku/create', 'HomeController@save');

Route::get('/buku/edit/{id}', 'HomeController@edit');
Route::post('/buku/edit', 'HomeController@update');

Route::get('/buku/delete/{id}', 'HomeController@delete')->name('deletebuku');
Route::get('buku/detailbuku/{id}', 'HomeController@detailbuku');



Route::get('Anggota/anggota', 'HomeController@index_anggota');

Route::get('anggota/create', 'HomeController@create_anggota');
Route::post('anggota/create', 'HomeController@save_anggota');

Route::get('anggota/edit/{id}', 'HomeController@edit_anggota')->name('editanggota');
Route::post('anggota/edit', 'HomeController@update_anggota')->name('update_anggota');

Route::get('anggota/delete/{id}', 'HomeController@delete_anggota')->name('deleteanggota');




Route::get('Peminjam/peminjam', 'HomeController@index_peminjam')->name('indexpeminjam');



Route::get('peminjam/create', 'HomeController@create_peminjam');
Route::post('peminjam/create', 'HomeController@save_peminjam');



Route::get('peminjam/delete/{id}', 'HomeController@delete_peminjam')->name('deletepeminjam');

Route::get('peminjam/detail/{id}', 'HomeController@detail');

Route::get('peminjam/downloadpdfpinjam/{id}', 'HomeController@downloadpdfpinjam')->name('downloadpdfpinjam');
Route::get('peminjam/downloadpdf_allpinjam', 'HomeController@downloadpdf_allpinjam')->name('downloadpdf_allpinjam');

Route::get('buku/downloadpdfbuku/{id}', 'HomeController@downloadpdfbuku')->name('downloadpdfbuku');
Route::get('buku/downloadpdf_allbuku', 'HomeController@downloadpdf_allbuku')->name('downloadpdf_allbuku');

Route::get('anggota/downloadpdfanggota/{id}', 'HomeController@downloadpdfanggota')->name('downloadpdfanggota');
Route::get('anggota/downloadpdf_allanggota', 'HomeController@downloadpdf_allanggota')->name('downloadpdf_allanggota');



Route::get('Pengembali/pengembali', 'HomeController@index_pengembali')->name('indexpengembali');

Route::get('Pengembali/create', 'HomeController@create_pengembali');
Route::post('Pengembali/create', 'HomeController@save_pengembali');

Route::get('Pengembali/delete/{id}', 'HomeController@delete_pengembali')->name('deletepengembali');


Route::get('buku/search', 'HomeController@search');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login', 'Auth\AuthController@getLogin')->name('login');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('register', 'Auth\AuthController@getRegister')->name('register');
Route::post('register', 'Auth\AuthController@postRegister');
Route::get('registeradmin', 'Auth\AuthController@getRegisteradmin')->name('registeradmin');
Route::post('registeradmin', 'Auth\AuthController@postRegisteradmin');
Route::get('logout', function() {
    Auth::logout();
    return redirect(url('login'));

});