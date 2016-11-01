<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhuongAn extends Model
{
    protected $table = 'phuongan';
	protected $fillable = ['ma_phuong_an', 'noi_dung', 'dung_sai', 'ma_cau_hoi'];

	//cau hoi
	public function cauhoi()
	{
		return $this->belongsTo('App\CauHoi');
	}
}
