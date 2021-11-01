<?php

namespace App\Services;

use App\Repositories\ShopRepository;
use phpDocumentor\Reflection\Types\This;

class ShopService extends BaseService
{
    protected $repo;
    public function __construct()
    {
        $this->repo = new ShopRepository;
    }

    public function getAll($category_id, $price, $orderBy, $paginate, $search)
    {
        $products = $this->repo->proget();
        $products = $this->filter($products, $category_id, $price, $orderBy);
        $products = $this->seach($products, $search);
        $products = $products->paginate($paginate);
        return $products;
    }
    public function filter($products, $category_id, $price, $orderBy)
    {
        if ($category_id) {
            $products = $products->where('category_id', (int) $category_id);
        }
        if ($price) {
            $products = $products->where('price', $price);
        }
        if ($orderBy == 'asc') {
            $products = $products->orderBy('price', 'asc');
        } else if ($orderBy == 'desc') {
            $products = $products->orderBy('price', 'desc');
        } else if ($orderBy == 'newless') {
            $products = $products->orderBy('created_at', 'desc');
        } else if ($orderBy == 'popularity') {
            // $products = $products->orderBy('price', 'asc');
        }
        return $products;
    }
    public function seach($products, $search)
    {
        if ($search) {
            $products = $products->where('name', 'like', '%' . $search . '%');
        }
        return $products;
    }
    public function cateser()
    {
        return $this->repo->catget();
    }
}
