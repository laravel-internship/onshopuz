<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'all_price',
        'date',
        'delivery_price',
        'status',
        'payment_type',
        'user_id',
        'first_name',
        'lastname',
        'phone',
        'address'
    ];

    public function orderdetail()
    {
        return $this->hasMany(OrderDetail::class,'order_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }




}
