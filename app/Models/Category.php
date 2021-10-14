<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }


    //product model

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
