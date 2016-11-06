<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CauHoi extends Model
{
    protected $table = 'cauhoi';
	protected $fillable = ['id_cauhoi', 'noi_dung', 'id_dethi'];

	//de thi
	public function dethi()
	{
		return $this->belongsTo('App\DeThi');
	}

	//phuong an
	public function phuongan()
	{
		return $this->hasMany('App\PhuongAn');
	}
}
