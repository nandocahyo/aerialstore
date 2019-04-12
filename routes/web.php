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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('dashboard','DashboardController');
	Route::resource('kategori','KategoriController');
	Route::resource('produk','ProdukController');
	Route::resource('customer','CustomerController');

	Route::get('transaksi','TransaksiController@index')->name('transaksi.index');
	Route::post('transaksi','TransaksiController@store')->name('transaksi.store');
	Route::delete('transaksi/{id}','TransaksiController@destroy')->name('transaksi.destroy');
	Route::get('transaksi/update','TransaksiController@update')->name('transaksi.update');

	Route::get('barcode','ProdukController@printBarcode')->name('produk.barcode');
	Route::get('chart','DashboardController@chartshow');
	Route::get('laporan','TransaksiController@laporan')->name('transaksi.laporan');

});

//tes template admin
Route::get('/tes', function () {
    return view('admin.master');
});
