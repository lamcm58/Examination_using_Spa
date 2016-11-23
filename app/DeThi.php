<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dethi extends Model
{
    protected $table = 'dethi';
    protected $guarded = [];
    protected $casts = [        
        'name_dethi' => 'json'
    ];
}
