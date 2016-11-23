<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonThi extends Model
{
    protected $table = 'monthi';
    protected $guarded = [];
    protected $casts = [
        'choices' => 'json',
        'name_dethi' => 'json'
    ];
}
