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
	Route::group(['prefix' => 'monthi'], function(){
		Route::get('list', ['as' => 'admin.monthi.list','uses' => 'MonThiController@getList']);
		Route::get('add', ['as' => 'admin.monthi.add','uses' => 'MonThiController@getAdd']);
		Route::post('add', ['as' => 'admin.monthi.add','uses' => 'MonThiController@postAdd']);
		Route::get('edit/{id_monthi}', ['as' => 'admin.monthi.edit','uses' => 'MonThiController@getEdit']);
		Route::post('edit/{id_monthi}', ['as' => 'admin.monthi.edit','uses' => 'MonThiController@postEdit']);
		Route::get('delete/{id_monthi}', ['as' => 'admin.monthi.delete','uses' => 'MonThiController@getDelete']);
		Route::get('view/{id_monthi}', ['as' => 'admin.monthi.view','uses' => 'MonThiController@getView']);
	});
	Route::group(['prefix' => 'dethi'], function(){
		Route::get('list', ['as' => 'admin.dethi.list','uses' => 'DeThiController@getList']);
		Route::get('add', ['as' => 'admin.dethi.add','uses' => 'DeThiController@getAdd']);
		Route::post('add', ['as' => 'admin.dethi.add','uses' => 'DeThiController@postAdd']);
		Route::get('edit/{id_dethi}', ['as' => 'admin.dethi.edit','uses' => 'DeThiController@getEdit']);
		Route::post('edit/{id_dethi}', ['as' => 'admin.dethi.edit','uses' => 'DeThiController@postEdit']);
		Route::get('delete/{id_dethi}', ['as' => 'admin.dethi.delete','uses' => 'DeThiController@getDelete']);
	});
	Route::group(['prefix' => 'cauhoi'], function(){
		Route::get('list', ['as' => 'admin.cauhoi.list','uses' => 'CauHoiController@getList']);
		Route::get('add', ['as' => 'admin.cauhoi.add','uses' => 'CauHoiController@getAdd']);
		Route::post('add', ['as' => 'admin.cauhoi.add','uses' => 'CauHoiController@postAdd']);
		Route::get('edit/{id_cauhoi}', ['as' => 'admin.cauhoi.edit','uses' => 'CauHoiController@getEdit']);
		Route::post('edit/{id_cauhoi}', ['as' => 'admin.cauhoi.edit','uses' => 'CauHoiController@postEdit']);
		Route::get('delete/{id_cauhoi}', ['as' => 'admin.cauhoi.delete','uses' => 'CauHoiController@getDelete']);
	});
	Route::group(['prefix' => 'phuongan'], function(){
		Route::get('list', ['uses' => 'AdminController@getListPhuongAn']);
	});
});
