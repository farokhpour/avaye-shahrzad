<?php

namespace App\Repository\Implement;

use App\Models\Employee;
use App\Repository\EmployeeRepositoryInterface;

class EmployeeRepository extends BaseRepository implements EmployeeRepositoryInterface {

    protected $model;

    public function __construct(Employee $model)
    {
        $this->model = $model;
    }

}