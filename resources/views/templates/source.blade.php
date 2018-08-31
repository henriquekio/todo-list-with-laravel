<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Do'it</title>
    {{Html::style('css/bootstrap/css/bootstrap.min.css')}}
    {{Html::style('css/style.css')}}
    {!! Html::style('js/plugin/sweetalert.css') !!}
</head>
<body>
<div class="container-fluid">
    @include('resources.menu')
    {{--conteudo--}}
    <div class="container-fluid">
        <div class="row">
            @include('resources.sidebar')
            @yield('content')
        </div>
    </div>
</div>
{{Html::script('js/jquery/jquery-3.2.1.min.js')}}
{{Html::script('css\bootstrap\js\bootstrap.min.js')}}
{!! Html::script('js/main.js') !!}
{!! Html::script('js/plugin/sweetalert.min.js') !!}
</body>
</html>