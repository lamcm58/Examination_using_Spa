<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThiTracNghiem extends Model
{
    protected $table = 'cauhoi';
    protected $guarded = [];
    protected $casts = [
        'choices' => 'json',
        'name_dethi' => 'json'
    ];
}
