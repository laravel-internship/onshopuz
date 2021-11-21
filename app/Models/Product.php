<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
//text*3,teatarea*2,file*2,text-2*1,
    protected $fillable = [
        'id',
        'name',
        'price',
        'quatity',
        'data',
        'about',
        'description',
        'image',
        'images',
        'category_id',
        'discount',
        'status',
        'slug'

    ];

    public function orderdetail()
    {
        return $this->hasMany(OrderDetail::class, 'product_id', 'id');
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class, 'product_id', 'id');
    }



    //product model

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
