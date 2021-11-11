<?php

namespace App\Services;

use App\Repositories\DetailRepository;

class DetailService extends BaseService
{

    public function __construct()
    {
        $this->repo = new DetailRepository;
    }

    public function maounte($slug)
    {
        return $this->repo->proget()->where('slug', $slug)->first();
    }

    public function product($product)
    {
        return  $this->repo->proget()->where('category_id', $product->category_id)->paginate(9);
    }
    public function related($product)
    {
        return $this->repo->proget()->where('category_id', $product->category_id)->limit(9)->paginate(3);
    }
}
