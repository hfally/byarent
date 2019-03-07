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

Route::get('', 'PagesController@welcome')
    ->name('home');

Route::get('about', 'PagesController@about')
    ->name('about');

Route::get('support', 'PagesController@support')
    ->name('support');

Auth::routes();

Route::get('houses', 'HouseController@index')
    ->name('houses');

Route::get('house/view/{pid}', 'HouseController@show')
    ->name('house.show');

Route::post('cart/update', 'OrderController@updateCart')
    ->name('cart.update');

Route::get('checkout', 'OrderController@create')
    ->name('checkout');

Route::post('order/create', 'OrderController@store')
    ->name('order');

Route::get('orders', 'OrderController@index')
    ->name('orders');

Route::get('order/invoice/{id}', 'OrderController@show')
    ->name('invoice');

//--- ADMIN ROUTES ---//
Route::prefix('admin')->group(function () {

    Route::get('', 'HomeController@index')
        ->name('admin.home');

    Route::get('login', 'Auth\LoginController@showAdminLoginForm')
        ->name('admin.login');

    Route::post('login', 'Auth\LoginController@adminLogin');

    Route::post('logout', 'Auth\LoginController@adminLogout')
        ->name('admin.logout');

    // HOUSES
    Route::get('house/create', 'Admin\HouseController@create')
        ->name('house.create');

    Route::post('house/create', 'Admin\HouseController@store');

    Route::get('house/edit/{id}', 'Admin\HouseController@edit')
        ->name('house.edit');

    Route::post('house/edit/{id}', 'Admin\HouseController@update');

    Route::post('house/delete/{id}', 'Admin\HouseController@delete')
        ->name('house.delete');

    Route::get('houses', 'Admin\HouseController@index')
        ->name('admin.houses');

    // ORDERS
    Route::get('orders', 'Admin\OrderController@index')
        ->name('admin.orders');

    Route::get('order/invoice/{id}', 'Admin\OrderController@show')
        ->name('admin.invoice');

    Route::redirect('', 'admin/houses');
});