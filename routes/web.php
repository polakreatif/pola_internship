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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::resource('articles', 'ArticleController');

Route::resource('dashboards', 'DashboardController');

Route::resource('jumbotrons', 'JumbotronController');

Route::resource('portfolios', 'PortfolioController');

Route::resource('services', 'ServiceController');

Route::resource('careers', 'CareerController');