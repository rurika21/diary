<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Target extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'content',
        'user_id'
];
}