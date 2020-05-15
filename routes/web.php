<?php

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

Route::get('/', 'PageController@index');

Auth::routes();

Route::get('/dashboards', 'DashboardController@index');

// Route::post('store', 'HeaderController@store');

Route::resource('/dashboards/headers', 'HeaderController');

Route::resource('/dashboards/artikels', 'ArtikelController');

Route::resource('/dashboards/portofolios', 'PortofolioController');

Route::resource('/dashboards/careers', 'CareerController');

Route::resource('/dashboards/services', 'ServiceController');


