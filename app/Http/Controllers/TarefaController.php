<?php

namespace App\Http\Controllers;

use App\Repositories\TarefaRepositoryEloquent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    /**
     * @var TarefaRepositoryEloquent
     */
    protected $repository;

    /**
     * TarefaController constructor.
     * @param TarefaRepositoryEloquent $repository
     */
    public function __construct(TarefaRepositoryEloquent $repository)
    {
        $this->repository = $repository;
    }

    public function create(Request $request)
    {
        $currentDate = Carbon::today()->format('Y-m-d');
        $idUsuario = auth()->user()->id;
        $request->request->add(['data_criacao' => $currentDate, 'usuario_id' => $idUsuario]);
        $this->repository->create($request->all());

        return redirect()->action('IndexController@listaTarefas');
    }

    public function remove(Request $request)
    {
        $excluir = $this->repository->delete($request->id);

        return response()->json($excluir);
    }

    public function init(Request $request)
    {
        $iniciar = $this->repository->update($request->all(), $request->id);

        return response()->json($iniciar);
    }

}
