<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhuongAn extends Model
{
    protected $table = 'phuongan';
	protected $fillable = ['id_phuongan', 'noi_dung_phuongan', 'dung_sai', 'id_cauhoi'];

	//cau hoi
	public function cauhoi()
	{
		return $this->belongsTo('App\CauHoi');
	}
}
