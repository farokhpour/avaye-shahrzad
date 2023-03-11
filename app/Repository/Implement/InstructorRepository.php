<?php

namespace App\Repository\Implement;

use App\Models\Instructor;
use App\Repository\InstructorRepositoryInterface;

class InstructorRepository extends BaseRepository implements InstructorRepositoryInterface {

    protected $model;

    public function __construct(Instructor $model)
    {
        $this->model = $model;
    }

}