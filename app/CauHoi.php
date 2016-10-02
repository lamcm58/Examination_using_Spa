<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CauHoi extends Model
{
    protected $table = 'cauhoi';
    protected $fillable = ['ma_cau_hoi','ma_mon_hoc','noi_dung'];

    public function monhoc()
    {
    	return $this->belongsTo('App\MonHoc');
    }

    public function phuongan()
    {
    	return $this->hasMany('App\PhuongAn');
    }
}
