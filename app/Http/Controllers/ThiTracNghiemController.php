<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\ThiTracNghiem;
use App\CauHoi;
use App\Dethi;
use App\MonThi;

class ThiTracNghiemController extends Controller
{
    public function getList(){

    	return ThiTracNghiem::orderBy('id','ASC')->get();
    }
    public function index()
    {
        //$users = DB::select('select * from monthi join dethi on monthi.id = dethi.monthi_id' );

        return MonThi::join('dethi','monthi.id', '=', 'dethi.monthi_id')->get();

    }
 //   public function index(){
//        $cauhois = CauHoi::all();
//        $dethis  = Dethi::all();
//        $monthis  = MonThi::all();
//        foreach ( $monthis as $monthi){
//            $dethis = Dethi::find($monthi->id)->get();
//        }
//        return $dethis;
  //      return  MonThi::find(1)->get();
  //  }
}
