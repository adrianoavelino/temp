<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>..:GID:..</title>
    <link rel="stylesheet" href="./assets/components/bootstrap/dist/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="./assets/components/select2/dist/css/select2.min.css" media="screen">
    <script  src="./assets/components/jquery/dist/jquery.js"></script>
    <script src="./assets/components/select2/dist/js/select2.min.js"></script>
    <script src="assets/components/select2/dist/js/i18n/pt-BR.js" ></script>
    <script src="./assets/js/js.js"></script>
</head>
<body>
<?php 
include_once './filhos.php';    
include_once './pais.php';


?>    
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8"> <!-- conteúdo -->
                <div class="page-header">
                  <h1>Lorem ipsum dolor sit amet.<br /> <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, magnam?</small></h1>
                </div>
                <div class="panel panel-primary"> <!-- identificacao -->
                    <div class="panel-heading">Identificação de usuário</div>
                    <div class="panel-body">
                        <div class="identificacao"></div>
                        <form class="form-horizontal" id="formIdentificacao" method="post" action="javascript:func()">
                            
                            <div class="form-group">
                                <label for="email" class="col-sm-2 col-xs-2 control-label"></label>
                                <div class="col-xs-10 col-sm-5">
                                    <div id="msgLogin"></div>
                                </div>
                            </div>
                            <!--<div class="form-group has-success has-feedback">-->
                            <div class="form-group ">
                                <label for="email" class="col-sm-2 col-xs-2 control-label">E-mail</label>
                                <div class="col-xs-10 col-sm-5">
                                    <input type="text" class="form-control" id="email" placeholder="Ex: email@email.com.br" value="joao@email.com" autofocus >
                                    <!--<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>-->
                                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                </div>
                            </div>
                            <!--<div class="form-group has-error has-feedback">-->
                            <div class="form-group ">
                                <label for="matricula" class="col-sm-2 col-xs-10 control-label">Matricula</label>
                                <div class="col-xs-10 col-sm-5">
                                    <input type="text" class="form-control" id="matricula" placeholder="Ex: 123456-7" value="1111111" maxlength="7"   pattern="[0-9]{7}" required >
                                    <!--<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>-->
                                    <span id="inputError2Status" class="sr-only">(error)</span>                                  
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 col-xs-10 control-label"></label>
                                <div class="col-xs-10 col-sm-5">
                                    <input type="submit" class="btn btn-primary" id="" value="Iniciar Palpite" />
                                    
                                </div>
                            </div>
                        </form>
                  </div>
                </div> <!-- /identificacao -->
                
                <div id="msg"></div>
                <form action="javascript: func()" method="post" id="formFilho"> <!-- filho -->
                    <div id="game" class="form-horizontal">
                        
                <?php foreach ($filhos as $key => $fil) { ?>
                        <div class="form-group"  style="margin: auto auto auto 5em;">
                            <label for="<?= $fil['nome'] ?>">
                                <span class="label label-default"><?=$fil['nome']; ?></span>
                                <img src="./assets/img/<?=$fil["img"]; ?>" alt="..." class="img-circle img-thumbnail"></label>
                            <select class=" col-sm-4 col-xs-10 js-example-responsive" name="filho<?=$key+1; ?>" id="filho<?=$key+1; ?>"  style="width: 50%" multiple="multiple"  >
                                <?php shuffle($filhos);  ?>
                                <?php foreach ($filhos as $filho) { ?>
                                    <option value="<?=$filho['pai']; ?>"><?=$filho['pai']; ?></option>
                                <?php } ?>
                            </select> 
                        </div> 
                <?php }?>                        
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-6 col-xs-10 ">
                            <input type="submit" value="Palpitar" class="btn btn-primary btn-lg col-xs-12 col-sm-12" >
                          </div>
                        </div>                        
                    </div>   
                </form><!-- /filho -->

            </div> <!-- /conteúdo -->

            <div class="col-md-2">

            </div>
        </div>
    </div>
</body>
</html>
