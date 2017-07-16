$(document).ready(function (e) {


    $("#solicitar").click(function (e) {

//Salvar dados do formulário em AJAX
        e.preventDefault();
        nome = $("#nome").val();
        password = $("#senha").val();
        curso = $("#curso option:selected").val();
        $("#formulario").hide();
        $("#chama_loading").show();
        $("#nomejs").text(nome);
        $("#cursojs").text(curso);
        load_story();
        
    });


});


