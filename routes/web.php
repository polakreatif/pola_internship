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

// resource =
// Route::get("/categories", "CategoryController@index");
// Route::get("/categories/create", "CategoryController@create");
// Route::post("/categories", "CategoryController@store");
// Route::get("/categories/{id}", "CategoryController@show");
// Route::get("/categories/{id}/edit", "CategoryController@edit");
// Route::put("/categories/{id}", "CategoryController@update");
// Route::delete("/categories/{id}", "CategoryController@destroy");

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

// Roles
Route::resource('roles', 'RoleController');

// Blogs
Route::get("/blogs/create", "BlogController@create");
Route::get("/blogs/{id}/edit", "BlogController@edit");
Route::get("/blogs", "BlogController@index_admin");
Route::get("/blog", "BlogController@index");
Route::get("/blog/{id}", "BlogController@show");
Route::post("/blogs", "BlogController@store");
Route::put("/blogs/{id}", "BlogController@update");
Route::delete("/blogs/{id}", "BlogController@destroy");

// Files
Route::get('/search', function (){
  return view('search');
});

// Files
Route::get('/files', function (){
  return view('files');
});

// Dashboard
Route::get('/dashboard', 'DashboardController@index');

// Home
Route::get('/', function (){
  return view('home');
});

