<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Service\ServiceRepositoryInterface;

class ServiceController extends Controller
{
	protected $serviceRepository;

    public function __construct(ServiceRepositoryInterface $serviceRepository)
    {
    	$this->serviceRepository = $serviceRepository;
    }

    public function demo()
    {
    	dd($this->serviceRepository->getAll());
    }
}
