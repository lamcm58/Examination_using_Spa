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
    return view('index');
});
Route::get('list', ['uses' => 'ThiTracNghiemController@index']);

Route::get('list2',function(){
     return App\MonThi::join('dethi','monthi.id', '=', 'dethi.monthi_id')->get();
});
Route::get('listcauhoi/{monthi_id}/{dethi_id}',function($monthi_id,$dethi_id){
    return App\CauHoi::where([
        ['dethi_id', '=', $dethi_id],
        ['monthi_id', '=',$monthi_id ],
    ])->get();
});
Route::get('list_monhoc',function(){
    return App\MonThi::orderBy('id','ASC')->get();
});
Route::get('getlist/{monthi_id}',function($monthi_id){
    return App\MonThi::join('dethi','monthi.id', '=', 'dethi.monthi_id')->where('monthi.id','=',$monthi_id)->get();

});
Route::get('getlist',function(){
    return App\MonThi::join('dethi','monthi.id', '=', 'dethi.monthi_id')->get();

});
Route::get('getnoquestion',function(){
    return App\CauHoi::join('cauhoi','monthi.id', '=', 'cauhoi.dethi_id')->get();

});
