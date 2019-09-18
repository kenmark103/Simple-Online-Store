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


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admindashboard', 'adminController@index')->name('admin.dashboard');
Route::get('/admin', 'adminauthController@showadminLoginForm')->name('admin.loginform');
Route::post('/admin', 'adminauthController@login')->name('admin.login');

Route::group(['as' => 'front.' ], function () {
Route::resource('items', 'welcomeController');   	
});

Route::get('/', 'welcomeController@index')->name('welcome');
Route::get('/officials', 'welcomeController@official')->name('officials');
Route::get('/casual', 'welcomeController@casual')->name('casual');
Route::get('/cart', 'cartController@index')->name('cart');
Route::get('/addtocart{id}', 'cartController@addcart')->name('cart.add');
Route::post('/cart', 'cartController@checkOut')->name('cart.checkout')->middleware('auth');





Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'as' => 'admin.' ], function () {
Route::resource('products', 'productController');  
Route::get('/admin/customers', 'adminController@customers')->name('customers');
Route::get('/admin/orders', 'adminController@orders')->name('orders');

});
