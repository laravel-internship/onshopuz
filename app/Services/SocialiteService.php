<?php

namespace App\Services;

use App\Core\Abstracts\AbstractService;
use App\Repositories\SocialiteRepository;

class SocialiteService extends BaseService
{
    public function __construct(SocialiteRepository $repo)
    {
        $this->repo = $repo;
    }

    public function create($params): object
    {
        $query = $this->repo->query();
        $user = $query->where('provider_id', $params->getId())->first();
        if (!$user) {
            $user = $this->repo->store($params);
        }
        return $user;
    }
}
