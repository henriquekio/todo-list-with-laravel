@extends('templates.source')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 reset-padding conteudo">
        <div class="main">
            <h1>Incluir tarefas</h1>
            <div class="container margin-top-20">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h4 class="text-center">Informações Tarefa</h4>
                        <div class="form-tarefas">
                            {!! Form::open(['route' => 'tarefas.cadastrar', 'method' => 'post']) !!}
                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input type="text" class="form-control" name="titulo" id="titulo">
                                <label for="descricao">Descrição</label>
                                <textarea id="descricao" class="form-control" rows="3" name="descricao"></textarea>
                                <label for="categoria">Categoria</label>
                                <select id="categoria" class="form-control" name="categoria_id">
                                    <option selected disabled>Selecione uma categoria</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                    @endforeach
                                </select>
                                <label for="prioridade">Prioridade</label>
                                <select class="form-control" name="prioridade" id="prioridade">
                                    <option selected disabled>Selecione uma Nivel de Prioridade</option>
                                    <option value="1">Alta</option>
                                    <option value="2">Média</option>
                                    <option value="3">Baixa</option>
                                </select>
                            </div>
                            <button class="btn btn-success">Inserir</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection