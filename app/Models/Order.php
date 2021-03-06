<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','billing_email','billing_name','billing_city','billing_phone','billing_area','billing_address',
        'billing_discount','billing_discount_code','billing_subtotal','billing_tax','billing_total','error'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product')->withPivot('quantity');
    }
}
