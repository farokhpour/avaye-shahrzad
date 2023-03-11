<?php

namespace App\Repository\Implement;

use App\Models\Student;
use App\Repository\StudentRepositoryInterface;

class StudentRepository extends BaseRepository implements StudentRepositoryInterface {

    protected $model;

    public function __construct(Student $model)
    {
        $this->model = $model;
    }

}