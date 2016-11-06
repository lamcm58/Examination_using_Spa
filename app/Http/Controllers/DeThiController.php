<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MonThi;
use App\DeThi;

use Session;
use DB;

class DeThiController extends Controller
{
    public function getList()
    {
    	$dethi = DeThi::get();
    	return view('admin.dethi.list', compact('dethi'));
    }

    public function getAdd()
    {
    	$monthi = MonThi::select('id_monthi', 'ten_monthi')->get();
    	return view('admin.dethi.add', compact('monthi'));
    }

    public function postAdd(Request $request)
	{
		$dethi = new DeThi();
		$dethi->id_dethi = $request->id_dethi;
		$dethi->ten_dethi = $request->ten_dethi;
		$dethi->so_cauhoi = 0;
		$dethi->id_monthi = $request->id_monthi;
		$dethi->save();

		MonThi::where('id_monthi',$request->id_monthi)
			->update(['so_dethi'=>DeThi::where('id_monthi',$request->id_monthi)->count()]);
		Session::flash('success','Thêm thành công đề thi');
		return redirect()->route('admin.dethi.list');
	}

	public function getEdit($id_dethi)
	{
		$dethi = DeThi::where('id_dethi',$id_dethi)->first();
		$monthi = MonThi::select('id_monthi', 'ten_monthi')->get();
		return view('admin.dethi.edit', compact('dethi', 'monthi'));
	}

	public function postEdit(Request $request, $id_dethi)
	{
		$dethi = DeThi::where('id_dethi',$id_dethi)->first();
		DeThi::where('id_dethi',$id_dethi)
				->update(['id_dethi'=>$request->id_dethi,
							'ten_dethi'=>$request->ten_dethi,
							'id_monthi'=>$request->id_monthi]);

		if ($dethi->id_monthi == $request->id_monthi) {
			MonThi::where('id_monthi',$request->id_monthi)
				->update(['so_dethi'=>DeThi::where('id_monthi',$request->id_monthi)->count()]);
		}
		else {
			MonThi::where('id_monthi',$request->id_monthi)
				->update(['so_dethi'=>DeThi::where('id_monthi',$request->id_monthi)->count()]);
			MonThi::where('id_monthi',$dethi->id_monthi)
				->update(['so_dethi'=>DeThi::where('id_monthi',$dethi->id_monthi)->count()]);
		}

		Session::flash('success','Sửa thành công đề thi');
		return redirect()->route('admin.dethi.list');
	}

	public function getDelete($id_dethi)
	{
		DB::table('dethi')->where('id_dethi',$id_dethi)->delete();
		Session::flash('success','Xóa thành công đề thi');
		return redirect()->route('admin.dethi.list');
	}
}
