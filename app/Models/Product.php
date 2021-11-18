<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Product;
use app\Models\Category;

class Product extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
}
