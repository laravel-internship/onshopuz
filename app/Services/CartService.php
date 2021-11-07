<?php

namespace App\Services;

use App\Repositories\CartRepository;
use App\Repositories\HomeRepository;

class CartService extends BaseService
{
    public $repo;
    public function __construct()
    {
        $this->repo = new CartRepository;
    }
    public function cart($product,$quentity)
    {
        $this->addcart($product, 1, $this->repo->cartlist());
    }

}
