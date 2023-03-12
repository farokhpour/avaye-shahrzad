<?php

namespace App\Repository\Implement;

use App\Models\Lesson;
use App\Repository\LessonRepositoryInterface;

class LessonRepository extends BaseRepository implements LessonRepositoryInterface {

    protected $model;

    public function __construct(Lesson $model)
    {
        $this->model = $model;
    }

}