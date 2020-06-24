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

Route::get('/', 'HomeController@index')->name('home.index');

Route::get('/detail', 'DetailController@index')->name('detail.index');

Route::get('/produkDetail/{id}','HomeController@edit');

Route::post('/keranjang/{produk}','DetailController@keranjang')->name('keranjang.tambah');

Route::get('/display-keranjang','KeranjangController@index')->name('displaykeranjang.index');

Route::post('/checkout','KeranjangController@checkout')->name('keranjang.checkout')->middleware('auth');

Route::delete('/keranjang/{produk}', 'KeranjangController@destroy')->name('keranjang.remove');

Route::put('/keranjang/{produk}', 'KeranjangController@update')->name('keranjang.update');

// Admin
Route::prefix('user')
    ->namespace('user')
    ->group(function(){
        Route::get('/','DashboardController@index')
            ->name('user.index');
        
        Route::resource('riwayat', 'RiwayatDashboardController');
    });
Auth::routes();

// Admin
Route::prefix('admin')
    ->namespace('admin')
    ->middleware('auth','admin')
    ->group(function(){
        Route::get('/','DashboardController@index')
            ->name('dashboard');
        
        Route::resource('produk', 'ProdukDashboardController');
        Route::resource('kategori', 'KategoriDashboardController');
        Route::resource('pemesanan', 'PemesananDashboardController');
    });
Auth::routes();
