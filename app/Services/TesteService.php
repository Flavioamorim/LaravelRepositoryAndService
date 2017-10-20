<?php 

namespace App\Services;

use App\Repositories\TesteRepository;

/**
 * summary
 */
class TesteService
{
    /**
     * summary
     */

    private $repository;

    public function __construct(TesteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(){


    	return $this->repository->all();
    }
}
