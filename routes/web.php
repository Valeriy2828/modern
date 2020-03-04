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
Route::get('/', 'MainController@index')->name('Main');
Route::get('/clientAddress/{id}', 'MainController@show')->name('Show');
Route::post('/clientAddress/add', 'MainController@storeAddress');
Route::get('/clientAddress/delete/{id}', 'MainController@addressDestroy');

Route::get('/clientAdd', 'ClientController@clientAdd')->name('clientAdd');
Route::post('/clientAdd/add', 'ClientController@store');

Route::get('/adressAll', 'AddressController@addressGet')->name('adressAll');
Route::get('/adressAll/{client}', 'AddressController@addressGet')->name('clientAddress');

Route::group([ 'middleware' => 'Admin' ],function(){	
	Route::get('/api/userslist', 'ApiController@apiList')->name('Api');
	Route::get('/api/userslist/{id}', 'ApiController@showId')->name('ShowId');
});	

