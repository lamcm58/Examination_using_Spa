<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CauHoi extends Model
{
    protected $table = 'cauhoi';
    protected $guarded = [];
    protected $casts = [
        'choices' => 'json',
        
    ];
}
