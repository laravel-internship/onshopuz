<?php

namespace App\Services;

use App\Repositories\HomeRepository;

class HomeService extends BaseService
{
    public $repo;
    public function __construct()
    {
        $this->repo = new HomeRepository;
    }
    public function cart($product,$quentity)
    {
        $this->addcart($product, 1, $this->repo->cartlist());
    }
    public function proone()
    {
      return $this->repo->proget()->inRandomOrder()->paginate(3);
    }
    public function protwo()
    {
      return $this->repo->proget()->inRandomOrder()->paginate(3);
    }
    public function prothree()
    {
      return $this->repo->proget()->inRandomOrder()->paginate(3);
    }
    public function category(){
       return $this->repo->catget();
    }
}
