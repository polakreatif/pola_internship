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

Route::get('/', 'HomeController@index');

Route::get('/detail', 'DetailController@index');

Route::get('/produkDetail/{id}','HomeController@edit');

// Admin
Route::prefix('admin')
    ->namespace('admin')
    ->group(function(){
        Route::get('/','DashboardController@index')
            ->name('dashboard');
        
        Route::resource('produk', 'ProdukDashboardController');
        Route::resource('kategori', 'KategoriDashboardController');
        Route::resource('pemesanan', 'PemesananDashboardController');
    });