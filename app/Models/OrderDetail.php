<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'product_id',
        'order_id',
        'quantity',
        'price',
        'r_status'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class,'order_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function review()
    {
        return $this->hasOne(Review::class,'order_detail_id','id');
    }
}
