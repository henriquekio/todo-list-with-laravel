@extends('templates.source')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 reset-padding conteudo">
        <div class="main">
            <h1>Categorias</h1>
            <div class="container margin-top-40">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-categoria margin-bottom-20" id="categoria-container" style="display: none">
                            <form class="form-inline" method="post">
                                <div class="form-group text-center">
                                    <label for="categoria">Nome</label>
                                    <input data-categoria="" class="form-control" type="text" name="categoria"
                                           id="categoria">
                                    <a id="cadastrar-categoria" class="btn btn-success">Cadastrar</a>
                                    <a id="alterar-categoria" class="btn btn-success" style="display: none">Alterar</a>
                                </div>
                            </form>
                        </div>
                        <button class="btn btn-success center-block" id="inserir-categoria">Inserir Categoria</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <ul class="list-unstyled" id="lista-categoria">
                            @foreach($categorias as $categoria)
                                <li>{{$categoria->nome}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection