<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <?php require_once './dependencias/bootstrap.php'; ?>
        <?php require_once './dependencias/myCode.php'; ?>
        <?php require_once './autentica/recebe_ajax.php'; ?>
        <title> Benefício</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-4 col-md-4 col-md-offset-4">
                    <img src='img/logonewlife.png' alt="logo" class='center-block' id='logo_newlife'/>
                </div>
                <div class="row">
                    <div class="col-md-offset-4 col-md-4 col-md-offset-4 alert-info" id="connect">
                        <h1 class="text-center"> CONECTANDO A MATRIZ... </h1>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-offset-4 col-md-4 col-md-offset-4 alert-info" id="upload">
                        <h1 class="text-center"> ENVIANDO SEUS DADOS... </h1>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-offset-4 col-md-4 col-md-offset-4 alert-info" id="analise">
                        <h1 class="text-center"> EFETUANDO ANÁLISE... </h1>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-offset-4 col-md-4 col-md-offset-4 alert-info" id="download">
                        <h1 class="text-center"> RECEBENDO RESULTADO... </h1>
                    </div> 
                </div>
            </div> 
            <div class="row">
                <div class="col-md-offset-3 col-md-6 col-md-offset-3">
                    <form class="form-horizontal" id="formulario" method="POST">
                        <fieldset>

                            <!-- Form Name -->
                            <legend class='text-center'>Solicitar Benefício</legend>

                            <!-- Text Input -->

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="nome">Nome</label>
                                <div class="col-md-8">
                                    <input id="nome"  type="text" placeholder="Nome Completo" class="form-control input-md" required="">
                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="consultor" id="teste_form">Consultor</label>
                                <div class="col-md-8">
                                    <select id="consultor" name="consultor" class="form-control">
                                        <option value="0">Selecione</option>
                                        <option value="angelica">Angélica Dias</option>
                                        <option value="maria">Mariá Marques</option>
                                    </select>
                                </div>
                            </div>

                            <!-- File Button --> 
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="curriculo">Currículo</label>
                                <div class="col-md-4">
                                    <input id="curriculo" name="curriculo" class="input-file" type="file">
                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="cargo">Cargo Desejado</label>
                                <div class="col-md-8">
                                    <select id="cargo" name="cargo" class="form-control">
                                        <option value="Operadortelemarketing">Selecione</option>
                                        <option value="operadorcaixa">Operador de Telemarketing</option>
                                        <option value="vendedorinterno">Operador de Caixa</option>
                                        <option value="vendedorexterno">Vendedor Interno</option>
                                        <option value="caixahotel">Vendedor Externo</option>
                                        <option value="secretaria">Caixa de Hotel</option>
                                        <option value="auxiliarescritorio">Secretária (a)</option>
                                        <option value="auxiliarrecursoshumanos">Auxiliar de Escritório</option>
                                        <option value="auxiliarcontabilidade">Auxiliar de Recursos Humanos</option>
                                        <option value="">Auxiliar de Contabilidade</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="senha">Senha</label>
                                <div class="col-md-8">
                                    <input id="senha" name="senha" type="password" placeholder="Senha Consultor" class="form-control input-md" required="">
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="solicitar"></label>
                                <div class="col-md-4">
                                    <input type="submit" id="solicitar" name="solicitar" class="btn btn-success" value="Solicitar">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    
                    <div id="sucesso">
                        <div class="row text-center">
                            <div class="col-sm-6 col-sm-offset-3">
                                <br><br> <h2 style="color:#0fad00">Benefício concedido!</h2>
                                <img src="http://osmhotels.com//assets/check-true.jpg">
                                <h3>Curso Auxiliar Veterinário</h3>
                                <p style="font-size:20px;color:#5C5C5C;"> Parabéns
                                <span id="nomejs"></span>! Você irá fazer parte do projeto MEU EMPREGO, 
                                    e terá a oportunidade de se qualificar com incentivo das empresas parceiras</p>
                                <a href="" class="btn btn-success">     Log in      </a>
                                <br><br>
                            </div>

                        </div>
                    </div>

                    <div id="chama_loading">
                        <?php
                        include_once './loading.php';
                        ?>
                    </div>

                </div> 
            </div>
        </div>
    </body>
</html>
