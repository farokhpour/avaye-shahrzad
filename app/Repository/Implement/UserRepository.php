<?php

namespace App\Repository\Implement;

use App\Models\User;
use App\Repository\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface {

    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }
}