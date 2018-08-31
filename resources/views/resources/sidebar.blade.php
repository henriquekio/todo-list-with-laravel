<div class="col-md-2 sidebar">
    <h4>Bem Vindo {{Auth::user()->name}}</h4>
    <ul class="nav nav-sidebar">
        <li class="active"><a href="{{route('home.inicio')}}">Inicio</a></li>
        <li><a href="{{route('tarefas.inicio')}}">Tarefas</a></li>
        <li><a href="{{route('tarefas.listagem')}}">Listar Tarefas</a></li>
        <li><a href="{{route('categorias.inicio')}}">Categorias</a></li>
        <li><a href="{{route('logout')}}">Sair</a></li>
    </ul>
</div>