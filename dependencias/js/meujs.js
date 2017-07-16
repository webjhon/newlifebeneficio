$(document).ready(function (e) {

    $("#nomefail").hide();
    $("#senhafail").hide();
    $("#cursofail").hide();
    $("#consultorfail").hide();

    $("#solicitar").click(function (e) {

        //Salvar dados do formulário em AJAX

        e.preventDefault();
        validanome = 0;
        validasenha = 0;
        validacurso = 0;
        validaconsultor = 0;
        
        if ($("#nome").val() == "") {
            $("#nomefail").show();
            validanome = 1;
        }
        else{
           $("#nomefail").hide(); 
        }
        if ($("#senha").val() == "") {
            $("#senhafail").show();
            validasenha = 1;
        }
        else{
           $("#senhafail").hide(); 
        }
        if ($("#curso").val() == "") {
            $("#cursofail").show();
            validacurso = 1;
        }
        else{
            $("#cursofail").hide();
        }
        if ($("#consultor").val() == "") {
            $("#consultorfail").show();
            validaconsultor = 1;
        }
        else{
            $("#consultorfail").hide();
        }




        nome = $("#nome").val();
        password = $("#senha").val();
        curso = $("#curso option:selected").val();
        if (validanome == 0 && validasenha == 0 && validacurso == 0 && validaconsultor == 0) {
            $("#formulario").hide();
            $("#chama_loading").show();
            $("#nomejs").text(nome);
            $("#cursojs").text(curso);
            load_story();

        }

    });


});


