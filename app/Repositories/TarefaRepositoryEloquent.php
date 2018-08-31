<?php

namespace App\Repositories;

use App\Models\Tarefa;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;


/**
 * Class TarefaRepositoryEloquent
 * @package namespace App\Repositories;
 */
class TarefaRepositoryEloquent extends BaseRepository implements TarefaRepository
{
    /**
     * Specify Models class name
     *
     * @return string
     */
    public function model()
    {
        return Tarefa::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
