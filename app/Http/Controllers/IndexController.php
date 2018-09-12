<?php

namespace App\Http\Controllers;

use App\Repositories\CategoriaRepositoryEloquent;
use App\Repositories\TarefaRepositoryEloquent;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * @var TarefaRepositoryEloquent
     */
    protected $tarefaRepository;

    /**
     * @var CategoriaRepositoryEloquent
     */
    protected $categoriaRepository;

    /**
     * IndexController constructor.
     * @param TarefaRepositoryEloquent $tarefaRepository
     * @param CategoriaRepositoryEloquent $categoriaRepository
     */
    public function __construct(TarefaRepositoryEloquent $tarefaRepository, CategoriaRepositoryEloquent $categoriaRepository)
    {
        $this->tarefaRepository = $tarefaRepository;
        $this->categoriaRepository = $categoriaRepository;
    }


    public function paginaInicial()
    {
        return view('/index');
    }

    public function listaTarefas()
    {
        $tarefas = $this->tarefaRepository->findWhere(['usuario_id' => auth()->user()->id]);

        return view('lista-tarefas', compact('tarefas'));
    }

    public function tarefa()
    {
        $categorias = $this->categoriaRepository->all();

        return view('tarefas', compact('categorias'));
    }

    public function categoria()
    {
        $categorias = $this->categoriaRepository->all();

        return view('categorias', compact('categorias'));
    }
}
