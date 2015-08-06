<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>..:GID:..</title>
    <link rel="stylesheet" href="./assets/components/bootstrap/dist/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="./assets/components/select2/dist/css/select2.min.css" media="screen">
    <link rel="stylesheet" href="./assets/css/style.css" media="screen">
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
<!--
    <div class="row responsive-utilities-test visible-on" style="position: fixed; top: 0; right: 0; z-index: 1030; width: 100px; height: 100px;">
        <div class="">
          <span class="visible-xs-block bg-danger">✔ XS x-small</span>
        </div>
        <div class="">
          <span class="visible-sm-block  bg-info">✔ SM on small</span>
        </div>
        <div class="">
          <span class="visible-md-block  bg-primary">✔ MD on medium</span>
        </div>
        <div class="">
          <span class="visible-lg-block  bg-warning">✔ LG on large</span>
        </div>
    </div>
-->

    <!-- container -->
    <div class="container">
        
        <!-- row -->
        <div class="row">
            
            <!-- coluna da esquerda-->
            <div class=" col-xs-12 col-md-2 col-lg-2"></div>
            <!-- /coluna da esquerda-->
            
            <!-- coluna central -->
            <div class=" col-xs-12 col-md-8 col-lg-8"> 

                <!-- header -->
                <div class="page-header">
                  <h1>
                      Quem é o meu Papai?<br /> 
                      <img src="./assets/img/quem_e_o_papai.png" alt="Quem é o Papai?" class="img-rounded">
                  </h1>
                </div>
                <!-- /header -->

                <!-- login -->
                <div class="panel panel-primary">
                    <div class="panel-heading">Identificação de usuário</div>
                    <div class="panel-body">
                        <div class="identificacao"></div>
                        <form class="form-horizontal" id="formIdentificacao" method="post">
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
                                    <div id="msgLogin" class=""></div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="email" class="col-sm-2 control-label">E-mail</label>
                                <div class="col-sm-10 ">
                                    <input type="text" class="form-control" id="email" placeholder="Ex: email@email.com.br" value="joao@email.com" autofocus >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="btn" class="col-sm-2 control-label"></label>
                                <div class="col-sm-3 col-xs-12">
                                    <input type="submit" class="btn btn-primary form-control" id="btn" value="Iniciar Palpite" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /login -->
                
                <!-- mensagem de erro -->
                <div id="msg" ></div>
                <!-- /mensagem de erro -->
                
                <!-- formulario -->
                <form class="form-horizontal" id="formFilho" method="post">
                    
                    <!-- game -->
                    <div id="game" class="form-horizontal">

                        <?php   foreach ($filhos as $key => $filho) { ?>
                        
                        <!-- filhos-->
                        <div class="filhos">
                            <div class="row">
                                <div class=" col-sm-2 text-align">
                                    <label for="" class="badge lbl-vertical-align"><?=$filho['nome'] ?> </label>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <label for="<?=$filho["id"]; ?>">
                                        <img src="./assets/img/<?=$filho["img"]; ?>" alt="Clique aqui para exibir as opções"  title="Clique aqui para exibir as opções" class="img-circle media-middle">
                                    </label>
                                </div>
                                <div class="col-sm-6  div-vertical-align">
                                    <select class="vertical-align" name="<?=$filho['id']; ?>" id="<?=$filho['id']; ?>"  style="width: 100%" >
                                        <option value="">Quem é o meu pai?</option>
                                        <?php shuffle($pais);  ?>
                                        <?php foreach ($pais as $pai) { ?>
                                            <option value="<?=$pai; ?>"><?=$pai; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /filhos-->

                        <?php   }?>

                        <div class="filhos" id="theEnd">
                            <div class="row " style="">
                                <div class="col-sm-12 text-align">
                                    <div class="thumbnail">
                                        <h2>Papai ...</h2>
                                        <h4>Deseja enviar o seu palpite?</h4>
                                        <img src="./assets/img/duvida.png" alt="...">
                                        <div class="caption">
                                            <p>
                                                <input type="submit" value="Sim" id="btn_palpitar" class="btn btn-primary btn-lg col-xs-12 col-sm-12" >
                                            </p>
                                            <br>
                                            <p>
                                                <a  class="btn btn-lg btn-warning  col-xs-12 col-sm-12" id="btnNao" role="button"><strong>Não, vou conferir!</strong></a>
                                            </p>
                                        </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <!--<div style="height: 1000px;"></div>--> 
                    </div> 
                    <!-- game -->  
            
                </form>
                <!-- /formulario -->
            
            </div>
            <!-- coluna central -->
            
            <!-- coluna da direita -->
            <div class=" col-xs-12 col-md-2 col-lg-2"></div>
            <!-- coluna da direita -->
            
        </div>
        <!-- /row -->
        
    </div>
    <!-- container -->
      
</body>
</html>
