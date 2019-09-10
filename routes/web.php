<?php

Auth::routes();

//user認証不要
Route::get('/', function() { return redirect('/home'); });

//userログイン後
Route::group(['middleware' => 'auth:user'], function() {
	Route::get('/home', 'HomeController@index')->name('home');
});

//admin認証不要
Route::group(['prefix' => 'admin'], function() {
	Route::get('/', function() { return redirect('/admin/home'); });
	Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
	Route::post('login', 'Admin\LoginController@login');
});

//adminログイン後
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
	Route::post('logout', 'Admin\LoginController@logout')->name('admin.logout');
	Route::get('home', 'Admin\HomeController@index')->name('admin.home');
});
