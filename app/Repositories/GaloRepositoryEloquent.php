<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\GaloRepository;
use App\Entities\Galo;
use App\Validators\GaloValidator;

/**
 * Class GaloRepositoryEloquent
 * @package namespace App\Repositories;
 */
class GaloRepositoryEloquent extends BaseRepository implements GaloRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Galo::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
