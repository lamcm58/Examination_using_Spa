<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeThi extends Model
{
    protected $table = 'dethi';
	protected $fillable = ['id_dethi', 'ten_dethi', 'so_cauhoi', 'id_monthi'];

	//mon thi
	public function dethi()
	{
		return $this->belongsTo('App\MonThi');
	}

	//cau hoi
	public function phuongan()
	{
		return $this->hasMany('App\CauHoi');
	}
}
