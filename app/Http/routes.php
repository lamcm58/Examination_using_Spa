<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//-------------------- Admin zone ----------------------//
Route::group(['prefix' => 'admin'], function(){
	Route::group(['prefix' => 'monhoc'], function(){
		Route::get('list', [
			'as' => 'admin.monhoc.list', 
			'uses' => 'MonHocController@getList'
		]);
	});
});
