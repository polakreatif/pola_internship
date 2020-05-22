
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
Route::get('/jumbotron', 'JumbotronController@index')->middleware('auth', 'admin');
Route::get('/jumbotron/edit', 'JumbotronController@edit')->middleware('auth', 'admin');
Route::put('/jumbotron/update', 'JumbotronController@update')->middleware('auth', 'admin');

// About Us
Route::get('/about-us', 'AboutUsController@index')->middleware('auth', 'admin');
Route::get('/about-us/edit', 'AboutUsController@edit')->middleware('auth', 'admin');
Route::put('/about-us/update', 'AboutUsController@update')->middleware('auth', 'admin');

// Carousel Promotion
Route::get('/carousel/create', 'CarouselController@create')->middleware('auth', 'admin');
Route::get('/carousel', 'CarouselController@index')->middleware('auth', 'admin');
Route::get('/carousel/{id}/edit', 'CarouselController@edit')->middleware('auth', 'admin');
Route::post('/carousel/store', 'CarouselController@store')->middleware('auth', 'admin');
Route::put('/carousel/{id}', 'CarouselController@update')->middleware('auth', 'admin');
Route::delete('/carousel/{id}', 'CarouselController@destroy')->middleware('auth', 'admin');

// Products
Route::get("/products/create", "ProductController@create")->middleware('auth', 'admin');
Route::get("/products/{id}/edit", "ProductController@edit")->middleware('auth', 'admin');
Route::get("/products", "ProductController@index")->middleware('auth', 'admin');
Route::get("/p/{id}", "ProductController@show");
Route::post("/products", "ProductController@store")->middleware('auth', 'admin');
Route::put("/products/{id}", "ProductController@update")->middleware('auth', 'admin');
Route::delete("/products/{id}", "ProductController@destroy")->middleware('auth', 'admin');

// Others
Route::get('/others', 'OtherController@index')->middleware('auth', 'admin');
Route::get('/others/edit', 'OtherController@edit')->middleware('auth', 'admin');
Route::put('/others/update', 'OtherController@update')->middleware('auth', 'admin');

// Setting
Route::get('/setting', 'SettingController@index')->middleware('auth', 'admin');
Route::put('/setting/update', 'SettingController@update')->middleware('auth', 'admin');

// Orders
Route::get('/orders', 'OrderController@index_admin')->middleware('auth', 'admin');
Route::get('/orders/{id}/edit', 'OrderController@edit_admin')->middleware('auth', 'admin');
Route::post('/orders/{product_id}/store', 'OrderController@store')->middleware('auth');
Route::put('/orders/{id}/update', 'OrderController@update')->middleware('auth', 'admin');
Route::delete('/orders/{id}', 'OrderController@destroy')->middleware('auth', 'admin');
Route::get('/my-order', 'OrderController@my_order')->middleware('auth');
Route::get('/order', 'OrderController@index')->middleware('auth');
Route::get('/order/{product_slug}', 'OrderController@create')->middleware('auth');
Route::get('/payments', 'OrderController@payments');


// Customer Service
Route::post('/customer-service-message', 'CustomerServiceController@send_to_wa');

// Users
Route::resource('users', 'UserController')->middleware('auth', 'admin');

Auth::routes();

// Dashboard
Route::get('/dashboard', 'DashboardController@index')->middleware('auth', 'admin');

// Home
Route::get('/', "HomeController@index");

