<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonThi extends Model
{
    protected $table = 'monthi';
	protected $fillable = ['id_monthi', 'ten_monthi', 'so_dethi'];
	

	//de thi
	public function dethi()
	{
		return $this->hasMany('App\DeThi');
	}
}
