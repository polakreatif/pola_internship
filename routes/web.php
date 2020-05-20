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

Route::get('/', 'DashboardController@index');
Route::get('/about-us', 'AboutController@index');
Route::get('/careers/register', 'DaftarController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::resource('/blogs', 'ViewController');

Auth::routes();

Route::resource('/careers', 'ViewCareerController');

Auth::routes();

Route::get('admin', 'Admin\AdminController@index');

Auth::routes();

Route::resource('admin/roles', 'Admin\RolesController');

Auth::routes();

Route::resource('admin/permissions', 'Admin\PermissionsController');

Auth::routes();

Route::resource('admin/users', 'Admin\UsersController');

Auth::routes();

Route::resource('admin/article', 'Admin\ArticleController');

Auth::routes();

Route::resource('admin/company', 'Admin\CompanyController');

Auth::routes();

Route::resource('admin/jumbotron', 'Admin\JumbotronController');

Auth::routes();

Route::resource('admin/career', 'Admin\CareerController');

Auth::routes();

Route::resource('admin/product', 'Admin\ProductController');

Auth::routes();

Route::resource('admin/carousel', 'Admin\CarouselController');

Auth::routes();

Route::resource('admin/submit', 'Admin\SubmitController');

Auth::routes();

Route::resource('admin/pages', 'Admin\PagesController');

Auth::routes();

Route::resource('admin/activitylogs', 'Admin\ActivityLogsController')->only([
    'index', 'show', 'destroy'
]);

Auth::routes();

Route::resource('admin/settings', 'Admin\SettingsController');

Auth::routes();

Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);

Auth::routes();

Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);