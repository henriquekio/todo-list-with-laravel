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

    public function inserir(Request $request)
    {
        $data = Carbon::today()->format('Y-m-d');
        $idUsuario = auth()->user()->id;
        $request->request->add(['data_criacao' => $data, 'usuario_id' => $idUsuario]);
        $this->repository->create($request->all());

        return redirect()->action('IndexController@listaTarefas');
    }

    public function remover(Request $request)
    {
        $excluir = $this->repository->delete($request->id);

        return response()->json($excluir);
    }

    public function iniciarTarefa(Request $request)
    {
        $iniciar = $this->repository->update($request->all(), $request->id);

        return response()->json($iniciar);
    }

}
