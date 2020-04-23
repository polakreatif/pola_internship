
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

// About Us
Route::get('/about-us', 'AboutUsController@index');
Route::get('/about-us/edit', 'AboutUsController@edit');
Route::put('/about-us/update', 'AboutUsController@update');

// Carousel Promotion
Route::get('/carousel/create', 'CarouselController@create');
Route::get('/carousel', 'CarouselController@index');
Route::get('/carousel/{id}/edit', 'CarouselController@edit');
Route::post('/carousel/store', 'CarouselController@store');
Route::put('/carousel/{id}', 'CarouselController@update');
Route::delete('/carousel/{id}', 'CarouselController@destroy');

// Products
Route::get("/products/create", "ProductController@create");
Route::get("/products/{id}/edit", "ProductController@edit");
Route::get("/products", "ProductController@index");
Route::get("/p/{id}", "ProductController@show");
Route::post("/products", "ProductController@store");
Route::put("/products/{id}", "ProductController@update");
Route::delete("/products/{id}", "ProductController@destroy");

// Others
Route::get('/others', 'OtherController@index');
Route::get('/others/edit', 'OtherController@edit');
Route::put('/others/update', 'OtherController@update');

// Setting
Route::get('/setting', 'SettingController@index');
Route::put('/setting/update', 'SettingController@update');

// Orders
Route::get('/order', 'OrderController@index');
Route::get('/order', 'OrderController@create');

// Users
Route::resource('users', 'UserController');

Auth::routes();

// Dashboard
Route::get('/dashboard', 'DashboardController@index');

// Home
Route::get('/', "HomeController@index");

