<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    protected $fillable = [
        'name',
        'location',
        'phone',
        'service',
        'vehicle',
        'status'
    ];
}
