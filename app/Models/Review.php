<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'rating',
        'comment',
        'order_detail_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function orderdetail()
    {
        return $this->belongsTo(OrderDetail::class,'order_detail_id','id');
    }

}
