<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as Application;
use Illuminate\Support\Collection;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    protected $app;

    public function __construct()
    {
        $this->app = new Application();
    }

    abstract public function model();

    public function makeModel()
    {
        $model = $this->app->make($this->model());

        if (!$model instanceof Model) {
            throw new RepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }

        return $this->model = $model;
    }

    public function resetModel()
    {
        $this->makeModel();
    }

    public function newQuery()
    {
        return $this->model = $this->model->newQuery();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function list($column, $key = null)
    {
        return $this->model->pluck($column, $key);
    }

    public function where($conditions, $operator = null, $value = null)
    {
        if (func_num_args() == 2) {
            list($value, $operator) = [$operator, '='];
        }

        $this->where[] = [$conditions, $operator, $value];

        return $this;
    }

    public function whereIn($conditions, $operator = null, $value = null)
    {
        if (func_num_args() == 2) {
            list($value, $operator) = [$operator, '='];
        }

        $this->newQuery()->whereIn[] = [$conditions, $operator, $value];

        return $this;
    }

    public function orWhereIn($conditions, $operator = null, $value = null)
    {
        if (func_num_args() == 2) {
            list($value, $operator) = [$operator, '='];
        }

        $this->newQuery()->orWhereIn[] = [$conditions, $operator, $value];

        return $this;
    }

    public function orWhere($conditions, $operator = null, $value = null)
    {
        if (func_num_args() == 2) {
            list($value, $operator) = [$operator, '='];
        }

        $this->orWhere[] = [$conditions, $operator, $value];

        return $this;
    }

    public function create($inputs = [])
    {
        return $this->model->create($inputs);
    }

    public function insert($inputs = [])
    {
        return $this->newQuery()->insert($inputs);
    }
}