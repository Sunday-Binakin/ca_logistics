<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public static function generateSlug()
    {
        $random = rand(1, 999999999);
        // dd($random);
        $slug = 'img' . str_pad($random, 9, '0', STR_PAD_LEFT);
        while (self::where('name', $slug)->first()) {
            self::generateSlug();
        }

        return $slug;
    }
    protected $guarded = [
        'id',
    ];
}
