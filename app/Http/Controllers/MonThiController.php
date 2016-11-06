<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MonThi;
use App\DeThi;

use DB;
use Session;

class MonThiController extends Controller
{
	public function getList()
	{
		$monthi = MonThi::get();
		return view('admin.monthi.list', compact('monthi'));
	}

	public function getAdd()
	{
		$monthi = MonThi::get();
		return view('admin.monthi.add', compact('monthi'));
	}

	public function postAdd(Request $request)
	{
		$monthi = new MonThi();
		$monthi->id_monthi = $request->id_monthi;
		$monthi->ten_monthi = $request->ten_monthi;
		$monthi->so_dethi = 0;
		$monthi->save();
		Session::flash('success','Thêm thành công môn thi');
		return redirect()->route('admin.monthi.list');
	}

	public function getEdit($id_monthi)
	{
		$monthi = MonThi::where('id_monthi',$id_monthi)->first();
		return view('admin.monthi.edit', compact('monthi'));
	}

	public function postEdit(Request $request, $id_monthi)
	{
		MonThi::where('id_monthi',$id_monthi)
			->update(['id_monthi'=>$request->id_monthi,
						'ten_monthi'=>$request->ten_monthi]);
		Session::flash('success','Sửa thành công môn thi');
		return redirect()->route('admin.monthi.list');
	}

	public function getDelete($id_monthi)
	{
		DB::table('monthi')->where('id_monthi',$id_monthi)->delete();
		Session::flash('success','Xóa thành công môn thi');
		return redirect()->route('admin.monthi.list');
	}
	public function getView($id_monthi)
	{
		$dethi = DeThi::where('id_monthi',$id_monthi)->get();
		return view('admin.monthi.view', compact('dethi'));
	}
}
