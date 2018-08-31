@extends('templates.source')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 reset-padding conteudo">
        <div class="main">
            <h1>Lista tarefas</h1>
            <div class="container margin-top-20">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h4 class="text-center">Informações Tarefa</h4>
                        <div class="lista table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <td>Titulo</td>
                                    <td>Descrição</td>
                                    <td>Data Criação</td>
                                    <td>Data Inicio</td>
                                    <td>Data Conclusão</td>
                                    <td class="text-center">Ações</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tarefas as $tarefa)
                                    <tr>
                                        <td>{{$tarefa->titulo}}</td>
                                        <td>{{$tarefa->descricao}}</td>
                                        <td>{{$tarefa->data_criacao}}</td>
                                        <td>{{$tarefa->data_inicio}}</td>
                                        <td>{{$tarefa->data_conclusao}}</td>
                                        <td>
                                            <button data-tarefa="{{$tarefa->id}}" data-toggle="tooltip"
                                                    title="Iniciar Tarefa" data-placement="top"
                                                    class="add-data btn btn-primary"><span
                                                        class="glyphicon glyphicon-play"></span></button>
                                            <button data-tarefa="{{$tarefa->id}}" data-toggle="tooltip"
                                                    title="Concluir Tarefa" data-placement="top"
                                                    class="concluir btn btn-primary"><span
                                                        class="glyphicon glyphicon-ok"></span></button>
                                            <button data-tarefa="{{$tarefa->id}}" data-toggle="tooltip"
                                                    title="Excluir Tarefa" data-placement="top"
                                                    class="excluir btn btn-primary"><span
                                                        class="glyphicon glyphicon-remove"></span></button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection