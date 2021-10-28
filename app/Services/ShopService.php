<?php

namespace App\Services;

use App\Repositories\ShopRepository;

class ShopService
{
    public function __construct(ShopRepository $repo)
    {
        $this->repo = $repo;
    }

    public function get()
    {
        return $this->repo->query();
    }
    public function filter($products, $category_id,$price,$orderBy)
    {
        if($category_id){
            $products = $products->where('category_id', (int) $category_id);
        }
        if($price){
            $products = $products->where('price', $price);
        }
        if($orderBy == 'asc'){
            $products = $products->orderBy('price', 'asc');
        } else if($orderBy == 'desc'){
            $products = $products->orderBy('price', 'desc');
        } else if($orderBy == 'newless'){
            $products = $products->orderBy('created_at', 'desc');
        } else if($orderBy == 'popularity'){
            // $products = $products->orderBy('price', 'asc');
        }
        return $products;
    }
    public function cateser()
    {
       return $this->repo->catequery();
    }
}
