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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('customers', 'CustomersController');
Route::resource('administrators', 'AdministratorsController');
Route::resource('products', 'ProductsController');
Route::resource('carts', 'CartsController');

Route::get('cart', 'CartsController@index')->name('products.index');
// Route::get('show', 'ProductsController@show')->name('products.show');
// Route::get('edit', 'ProductsController@edit')->name('products.edit');
