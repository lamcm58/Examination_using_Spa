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
	Route::get('', function(){
		return view('admin');
	});
	Route::group(['prefix' => 'monhoc'], function(){
		Route::get('list', ['uses' => 'MonHocController@getList']);
		Route::post('add', ['uses' => 'MonHocController@getAdd']);
		Route::get('edit/{id_monthi}', ['uses' => 'MonHocController@getEdit']);
		Route::post('edit/{id_monthi}', ['uses' => 'MonHocController@postEdit']);
		Route::get('delete/{id_monthi}', ['uses' => 'MonHocController@getDelete']);
	});
	Route::group(['prefix' => 'cauhoi'], function(){
		Route::get('', function(){
			return view('admin.cauhoi');
		});
		Route::get('list', ['uses' => 'CauHoiController@getList']);
		Route::post('add', ['uses' => 'CauHoiController@getAdd']);
		Route::get('edit/{id_cauhoi}', ['uses' => 'CauHoiController@getEdit']);
		Route::post('edit/{id_cauhoi}', ['uses' => 'CauHoiController@postEdit']);
		Route::get('delete/{id_cauhoi}', ['uses' => 'CauHoiController@getDelete']);
	});
	Route::group(['prefix' => 'phuongan'], function(){
		Route::get('list', ['uses' => 'AdminController@getListPhuongAn']);
	});
});
