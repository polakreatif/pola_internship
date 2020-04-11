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

// Blogs 
Route::resource('blog', 'BlogController');

// Products
Route::resource('p', 'ProductController');

// Users
Route::resource('users', 'UserController');

// Categories
Route::resource('categories', 'CategoryController');

// Roles
Route::resource('roles', 'RolesController');

// Files
Route::get('/files', function (){
  return view('files');
});

// Dashboard
Route::get('/dashboard', function (){
  return view('dashboard');
});

// Home
Route::get('/', function (){
  return view('home');
});

