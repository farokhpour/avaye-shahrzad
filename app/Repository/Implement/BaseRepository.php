<?php

namespace App\Repository\Implement;

use App\Models\User;
use App\Repository\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface{

    protected $model;


    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all(array $columns = ['*'] , array $relations = []): Collection{
        return $this->model->with($relations)->get($columns);
    }

    public function findById(int $modelId, array $columns = ['*'], array $relations = [], array $appends = []): ?Model
    {
        return $this->model->select($columns)->with($relations)->findOrFail($modelId)->append($appends);
    }

    public function create(array $payload): ?Model
    {
        $model = $this->model->create($payload);

        return $model->fresh();
    }

    public function createUserable(array $payload): ?Model
    {
        $model = $this->model->create($payload);
        if(@$payload['userable']){
            $model->user()->create([
                'username' => @$payload['username'],
                'password' => @$payload['password']
            ]);
        }
        return $this->findById($model->id,['*'],['user']);
    }

    public function updateUserable(int $modelId ,array $payload): ?Model
    {
        $model = $this->findById($modelId);
        $model->update($payload);
        if(@$payload['userable']){
            if(@$payload['username']){
                $array['username'] = $payload['username'];
            }
            if(@$payload['password']){
                $array['password'] = $payload['password'];
            }
            $model->user()->update($array);
        }
        return $this->findById($model->id,['*'],['user']);
    }
    
    public function deleteUserable(int $modelId): bool
    {
        $model = $this->findById($modelId);
        $model->user()->delete();
        return $this->deleteById($modelId);
    }
    public function update(int $modelId, array $payload): bool
    {
        return $this->findById($modelId)->update($payload);
    }

    public function deleteById(int $modelId): bool
    {
        return $this->findById($modelId)->delete();
    }
   
}