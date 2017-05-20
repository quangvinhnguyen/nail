<?php 

namespace App\Repositories\Service;

use App\Models\Service;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use App\Repositories\BaseRepository;

class ServiceRepository extends BaseRepository implements ServiceRepositoryInterface
{
    
    public function __construct()
    {
        parent::__construct();
    }

    public function model()
    {
        return $this->model = Service::class;
    }

    public function getAll(){
        return $this->all();
    }   
}