<?php

namespace App\Http\Controllers;

use App\Repositories\CategoriaRepositoryEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CategoriaController extends Controller
{
    /**
     * @var CategoriaRepositoryEloquent
     */
    protected $repository;

    /**
     * CategoriaController constructor.
     * @param CategoriaRepositoryEloquent $repository
     */
    public function __construct(CategoriaRepositoryEloquent $repository)
    {
        $this->repository = $repository;
    }


    public function ajaxCadastrar(Request $request)
    {
        $categoria = $this->repository->create(['nome' => $request->nome]);

        return json_encode($categoria);
    }

}
