<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonHoc extends Model
{
    protected $table = 'monhoc';
	protected $fillable = ['ma_mon_hoc', 'ten_mon_hoc'];

	//cau hoi
	public function cauhoi()
	{
		return $this->hasMany('App\CauHoi');
	}
}
