<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'image',
        'position',
        'about',
        'linkedin',
        'facebook',
        'about'
    ];
}
