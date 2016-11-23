<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CauHoi;
use App\DeThi;
use App\PhuongAn;

use Session;
use DB;

class CauHoiController extends Controller
{
    public function getList()
	{
		$cauhoi = CauHoi::get();
		return view('admin.cauhoi.list', compact('cauhoi'));
	}

	public function getAdd()
	{
		$dethi = DeThi::select('id_dethi','ten_dethi')->get();
		return view('admin.cauhoi.add', compact('dethi'));
	}

	public function postAdd(Request $request)
	{
		$cauhoi = new CauHoi();
		$cauhoi->id_cauhoi = $request->id_cauhoi;
		$cauhoi->noi_dung = $request->noi_dung;
		$cauhoi->id_dethi = $request->id_dethi;
		$cauhoi->save();
		
		$phuongan65 = new PhuongAn();
		$phuongan65->id_phuongan = $request->id_cauhoi."-A";
		$phuongan65->noi_dung_phuongan = $request->phuong_an65;
		$phuongan65->dung_sai = $request->dungsai65;
		$phuongan65->id_cauhoi = $request->id_cauhoi;
		$phuongan65->save();

		$phuongan66 = new PhuongAn();
		$phuongan66->id_phuongan = $request->id_cauhoi."-B";
		$phuongan66->noi_dung_phuongan = $request->phuong_an66;
		$phuongan66->dung_sai = $request->dungsai66;
		$phuongan66->id_cauhoi = $request->id_cauhoi;
		$phuongan66->save();

		$phuongan67 = new PhuongAn();
		$phuongan67->id_phuongan = $request->id_cauhoi."-C";
		$phuongan67->noi_dung_phuongan = $request->phuong_an67;
		$phuongan67->dung_sai = $request->dungsai67;
		$phuongan67->id_cauhoi = $request->id_cauhoi;
		$phuongan67->save();

		$phuongan68 = new PhuongAn();
		$phuongan68->id_phuongan = $request->id_cauhoi."-D";
		$phuongan68->noi_dung_phuongan = $request->phuong_an68;
		$phuongan68->dung_sai = $request->dungsai68;
		$phuongan68->id_cauhoi = $request->id_cauhoi;
		$phuongan68->save();
		

		DeThi::where('id_dethi',$request->id_dethi)
			->update(['so_cauhoi'=>CauHoi::where('id_dethi',$request->id_dethi)->count()]);

		Session::flash('success','Thêm thành công câu hỏi');
		return redirect()->route('admin.cauhoi.list');
	}

	public function getEdit($id_cauhoi)
	{
		$cauhoi = CauHoi::where('id_cauhoi',$id_cauhoi)->first();
		$phuongan = PhuongAn::where('id_cauhoi',$id_cauhoi)->get();
		$dethi = DeThi::select('id_dethi','ten_dethi')->get();
		return view('admin.cauhoi.edit',compact('cauhoi','phuongan','dethi'));
	}

	public function getDelete($id_cauhoi)
	{
		DB::table('cauhoi')->where('id_cauhoi',$id_cauhoi)->delete();
		Session::flash('success','Xóa thành công cau hoi');
		return redirect()->route('admin.cauhoi.list');
	}
}
