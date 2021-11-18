<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Product;
use app\Models\Category;




class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }
}
