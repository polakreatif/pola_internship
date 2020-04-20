
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
// Jumbotron
Route::get('/jumbotron', 'JumbotronController@index');
Route::get('/jumbotron/edit', 'JumbotronController@edit');
Route::put('/jumbotron/update', 'JumbotronController@update');

// Products
Route::get("/products/create", "ProductController@create");
Route::get("/products/{id}/edit", "ProductController@edit");
Route::get("/products", "ProductController@index");
Route::get("/p/{id}", "ProductController@show");
Route::post("/products", "ProductController@store");
Route::put("/products/{id}", "ProductController@update");
Route::delete("/p/{id}", "ProductController@destroy");

// Categories
Route::resource('categories', 'CategoryController');

// Orders
Route::resource('order', 'BlogController');

// Users
Route::resource('users', 'UserController');

Auth::routes();

// Dashboard
Route::get('/dashboard', 'DashboardController@index');

// Home
Route::get('/', "HomeController@index");

