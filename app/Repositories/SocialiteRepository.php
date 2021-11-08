<?php

namespace App\Repositories;

use App\Core\Abstracts\AbstractRepository;
use App\Models\User;

class SocialiteRepository extends BaseRepository
{

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function store($params): object
    {

       return $this->model->create([
           'email'=>$params->getEmail(),
           'provider_id'=>$params->getId(),
           'name'=> $params->getName()??$params->getNickname()
       ]);

    }
}
