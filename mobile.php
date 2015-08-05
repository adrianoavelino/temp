<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>..:GID:..</title>
    <link rel="stylesheet" href="./assets/components/bootstrap/dist/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="./assets/components/select2/dist/css/select2.min.css" media="screen">
    <script  src="./assets/components/jquery/dist/jquery.js"></script>
    <script src="./assets/components/select2/dist/js/select2.min.js"></script>
    <script src="assets/components/select2/dist/js/i18n/pt-BR.js" ></script>
    <script src="./assets/js/js.js"></script>
    <style>
    #btn_palpitar{
        margin-bottom: 1em;
    }

    .thumbnail {
    border: 0;
    }
    .form-horizontal{
        padding: 1em;

    }

    .page-header{
        margin: auto auto -1.3em;
        text-align: center;
    }

    /*sm*/
    @media (min-width: 768px) and (max-width: 992px) {
        /*body{background-color: pink;}*/
        .lbl-vertical-align { margin-top: 6em;}
        .div-vertical-align {top: 5em;}
        .text-align {text-align: center;}
        /*.filhos { padding-top: 10em; }*/
    }

    /*md*/
    @media (min-width: 992px) and (max-width: 1200px) {
        /*body{background-color: red;}*/
        .lbl-vertical-align { margin-top: 6em; right: -1em;}
        .div-vertical-align {top: 5em; left: -1em;}
        .text-align {text-align: right;}
        /*.filhos { padding-top: 2em;}*/
    }

    /*xs*/
    @media (max-width: 768px) {
        /*body{background-color: green;}*/
        .text-align {text-align: center;}
        .filhos { margin-top: 2em;}
    }

    /*lg*/
    @media (min-width: 1200px) {
        /*body {background-color: yellow;}*/
        .lbl-vertical-align { margin-top: 6em; float: right !important;}
        .div-vertical-align {top: 5em; left: -1em;}
        .text-align {text-align: center;}
        /*.filhos { padding-top: 22em;}*/
    }

    </style>
</head>
<body>
<?php
include_once './filhos.php';
include_once './pais.php';


    
    

    
//    echo $client  = @$_SERVER['HTTP_CLIENT_IP'];
//    echo $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
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
    </div>-->

    <div class="container">
        <div class="row">
            <div class=" col-xs-12 col-md-2 col-lg-2"></div>
            <div class=" col-xs-12 col-md-8 col-lg-8"> <!-- conteúdo -->

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
                        <form class="form-horizontal" id="formIdentificacao" method="post" action="javascript:func()">
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

                            <div class="form-group ">
                                <label for="matricula" class="col-sm-2 control-label">Matricula</label>
                                <div class="col-sm-10 ">
                                    <input type="text" class="form-control" id="matricula" placeholder="Ex: 123456-7" value="1111111" maxlength="7"   pattern="[0-9]{7}" required >
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






                <div id="msg" >

                </div>
                <!-- formulario -->
                <form action="javascript: func()" method="post" id="formFilho" class="form-horizontal">
                    <!-- game -->
                    <div id="game" class="form-horizontal">

                        <?php foreach ($filhos as $key => $filho) { ?>

                        <!-- filhos-->
                        <div class="filhos">
                            <div class="row " style=" margin-bottom: 20px;">
                                <div class=" col-sm-2 text-align">
                                    <label for="" class="badge lbl-vertical-align"><?=$filho['nome'] ?> </label>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <label for="<?=$filho["id"]; ?>">
                                        <img src="./assets/img/<?=$filho["img"]; ?>" alt="..." class="img-circle media-middle">
                                    </label>
                                </div>
                                <div class="col-sm-6  div-vertical-align">
                                    <select class="vertical-align" name="<?=$filho['id']; ?>" id="<?=$filho['id']; ?>"  style="width: 100%" >
                                        <option value="">Quem é o meu pai?</option>
                                        <?php array_unique(shuffle($filhos));  ?>
                                        <?php foreach ($filhos as $filho) { ?>
                                            <option value="<?=$filho['pai']; ?>"><?=$filho['pai']; ?></option>
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
                                            <a  class="btn btn-default  col-xs-12 col-sm-12" id="btnNao" role="button">Não, vou conferir!</a>
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                <!-- <h1>Deseja enviar o seu Palpite?</h1>
                                <div class="col-sm-12 col-xs-12 text-center">
                                    <input type="submit" value="Palpitar" id="btn_palpitar" class="btn btn-primary btn-lg col-xs-12 col-sm-12" >
                                </div> -->
                            </div>
                        </div>
                        <div style="height: 1000px;"></div> 
                    <!-- game -->

                </form>
                <!-- /formulario -->

            </div> <!-- /conteúdo -->

            <div class=" col-xs-12 col-md-2 col-lg-2">
            </div>
            <div id="fim"></div>
        </div>
    </div>
      
</body>
</html>
