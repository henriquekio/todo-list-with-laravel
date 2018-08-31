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
        $this->repository->create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'data_criacao' => $data,
            'usuario_id' => $idUsuario,
            'categoria_id' => $request->categoria,
            'prioridade' => $request->prioridade
        ]);

        return redirect('tarefas/lista-tarefas');
    }

    public function remover(Request $request)
    {
        $excluir = $this->repository->delete($request->id);

        return json_encode($excluir);
    }

    public function iniciarTarefa(Request $request)
    {
        $iniciar = $this->repository->update(['data_inicio' => $request->data], $request->id);

        return json_encode($iniciar);
    }

}
