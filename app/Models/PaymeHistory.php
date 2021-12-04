<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymeHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'token',
        'number',
        'expire',
        'payment_id',
        'status',
        'name_shop',
        'organization',
        'order_id',
        'pay_time',
        'merchanId',
        'terminalId',
        'ckeckId',
        'all_price',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
}
