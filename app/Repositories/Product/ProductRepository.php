<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function __construct()
    {
        parent::__construct();
    }

    public function model()
    {
        return $this->model = Product::class;
    }

}