<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','image','description','category_id'];


    public function cat(){
        return $this->belongsTo(Category::class,'category_id');

    }
}


