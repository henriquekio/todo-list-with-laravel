$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).ready(function () {

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    $('#inserir-categoria').click(function () {
        $('#categoria-container').slideDown();
        $(this).fadeOut();
    });

    $('#cadastrar-categoria').click(function () {
        var nomeCategoria = $('#categoria').val();
        cadastrarCategoria(nomeCategoria);
    });

    $('#cadastro').click(function () {
        $('#form-login').slideUp(200);
        $('#form-user').slideDown();
    });

    $('.excluir').click(function () {
        var id = $(this).data('tarefa');
        excluirTarefa(id);
    });

    $('.add-data').click(function () {
        var id = $(this).data('tarefa');
        var button = $(this).find('button');
        button.fadeOut();
        $(this).parent().html('<input type="date" name="data" data-tarefa="' + id + '" id="data-tarefa">');
    });
});

$(document).on("change", "#data-tarefa", function(){
    var id = $(this).data('tarefa');
    var data = $(this).val();

    adicionaDataInicio(id, data);
});

/**
 * @description Requisição ajax para cadastro de categorias
 * @param {string} categoria
 */
function cadastrarCategoria(categoria) {
    var request = $.ajax({
        type: 'POST',
        url: "categorias/cadastrar",
        data: {nome: categoria},
        dataType: "JSON"
    });

    request.done(function (e) {
        atualizaCategoria(e.nome, e.id);
        swal("Categoria Cadastrada com sucesso", "", "success");
        $('#categoria-container').slideUp();
        $('#inserir-categoria').fadeIn();
    });

    request.fail(function () {
        swal("Não foi possível cadastrar a categoria!", "Por favor contate o suporte", "error");
    });
}

/**
 * @description Atualiza dados na lista de categorias
 * @param {string} nome
 * @param {int} id
 */
function atualizaCategoria(nome, id) {
    var lista = $('#lista-categoria');
    lista.append('<li>' + nome + '</li>');
}

function excluirTarefa(id) {
    var request = $.ajax({
        type: 'POST',
        url: "excluir",
        data: {id: id},
        dataType: "JSON"
    });
    request.done(function (e) {
        swal({
            title: "Tarefa Removida!!",
            type: "success"
        }, function(){
            location.reload();
        });
    });

    request.fail(function () {
        swal("Não foi possível cadastrar a categoria!", "Por favor contate o suporte", "error");
    });
}

function adicionaDataInicio(id, data){
    var request = $.ajax({
        type: 'POST',
        url: "iniciar",
        data: {id: id, data: data},
        dataType: "JSON"
    });
    request.done(function (e) {
        swal({
            title: "Tarefa Atualizada!!",
            type: "success"
        }, function(){
            location.reload();
        });
    });

    request.fail(function () {
        swal("Não foi possível cadastrar a categoria!", "Por favor contate o suporte", "error");
    });
}