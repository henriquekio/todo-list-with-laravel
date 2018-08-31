<!doctype html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <title>Seja Bem Vindo</title>
    {{Html::style('css/bootstrap/css/bootstrap.min.css')}}
    {{Html::style('css/style.css')}}
</head>
<body>
<div class="container-fluid login-page">
    <div class="col-md-6 col-md-offset-3 login">
        <div class="login-content">
            <div class="login-title center-block">
            <span>Seja Bem Vindo ao
                            To-Do'it {{Html::image('img/logo.png', 'logo', ['class' => 'pull-right'])}}</span>
            </div>
            @if(!empty(Session::get('falha')))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Desculpe!</strong> {{Session::get('falha')}}
                </div>
            @endif
            <div class="form-login" id="form-login">
                {!! Form::open(['route' => 'login', 'method' => 'post']) !!}
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" id="" class="form-control" required>
                    <label>Senha</label>
                    <input type="password" name="password" required id="" class="form-control">
                </div>
                    <button type="submit" class="btn btn-success">Entrar</button>
                    <button type="button" id="cadastro" class="btn btn-primary">Cadastrar</button>
                {!! Form::close() !!}
            </div>
            <div class="form-cadastro" id="form-user" style="display: none">
                {!! Form::open(['route' => 'cadastro-usuario', 'method' => 'post']) !!}
                <div class="form-group">
                    <label>Nome</label>
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    <label>Email</label>
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    <label>Senha</label>
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                    <label>Confirmar Senha</label>
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    <button class="btn btn-success center-block margin-top-20">Cadastrar</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
{{Html::script('js/jquery/jquery-3.2.1.min.js')}}
{{Html::script('css\bootstrap\js\bootstrap.min.js')}}
{!! Html::script('js/main.js') !!}}
</body>
</html>