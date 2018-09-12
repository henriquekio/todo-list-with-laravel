<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Do'it</title>
    {!! Html::style('libs/bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('css/style.min.css') !!}
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
{!! Html::script('libs/jquery/jquery.min.js') !!}
{!!Html::script('libs/bootstrap/js/bootstrap.min.js') !!}
{!! Html::script('js/main.js') !!}
</body>
</html>