<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'category_id',
        'price',
        'quatity',
        'image',
        'images',
        'discount',
        'about',
        'description',
        'status',
        'data',
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
