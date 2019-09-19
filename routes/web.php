<?php
Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('login.admin');
Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm')->name('login.writer');
Route::get('/login/sale', 'Auth\LoginController@showSaleLoginForm')->name('login.sale');

Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('register.admin');
Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm')->name('register.writer');
Route::get('/register/sale', 'Auth\RegisterController@showSaleRegisterForm')->name('register.sale');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/writer', 'Auth\LoginController@writerLogin');
Route::post('/login/sale', 'Auth\LoginController@saleLogin');

Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('register.admin');
Route::post('/register/writer', 'Auth\RegisterController@createWriter')->name('register.writer');
Route::post('/register/sale', 'Auth\RegisterController@createSale')->name('register.sale');


Route::view('/home', 'home')->middleware('auth');

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin');
    Route::get('products/index','ProductController@index')->name('products.index');
    Route::get('products/create','ProductController@create')->name('products.create');
    Route::post('/products','ProductController@store')->name('products.store');
    Route::get('/products/history','ProductController@history')->name('products.history');
});

Route::group(['middleware' => 'auth:writer'], function () {
    Route::view('/writer', 'writer');
    Route::post('products/checkout', 'ProductController@checkout')->name('products.checkout');
    Route::get('products/checkoutIndex', 'ProductController@checkoutIndex')->name('products.checkout-index');
    Route::get('products/index','ProductController@index')->name('products.index');
});

Route::group(['middleware' => 'auth:sale'], function () {
    Route::view('/sale', 'sale');
});

