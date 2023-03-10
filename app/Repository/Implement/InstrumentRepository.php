<?php

namespace App\Repository\Implement;

use App\Models\Instrument;
use App\Repository\InstrumentRepositoryInterface;

class InstrumentRepository extends BaseRepository implements InstrumentRepositoryInterface {

    protected $model;

    public function __construct(Instrument $model)
    {
        $this->model = $model;
    }

}