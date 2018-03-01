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

if (env('APP_ENV') === 'production') {
    URL::forceSchema('https');
}

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('warehouses', 'WarehousesController');
    Route::resource('suppliers', 'SuppliersController');
    Route::resource('users', 'UsersController');
    Route::resource('products', 'ProductsController');
    Route::resource('orders', 'OrdersController');
    Route::resource('customers', 'CustomersController');

    Route::get('/api/orders/customers', 'Api\OrdersController@getCustomerData');
    Route::get('/api/orders/products', 'Api\OrdersController@getProductData');
    Route::post('/api/orders', 'Api\OrdersController@store');
});
