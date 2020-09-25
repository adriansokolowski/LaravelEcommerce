<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function presentPrice()
    {
        return '$' .number_format($this->price, 2);
    }

    public function scopemightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }
}
