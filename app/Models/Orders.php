<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'all_price',
        'date',
        'dativery_price',
        'status',
        'payment_type',
        'user_id'
    ];

    public function orderdetail()
    {
        return $this->hasMany(OrderDetails::class,'order_id','id');
    }

    public function user()
    {
        return $this->belongsTo(Users::class,'user_id','id');
    }

    


}
