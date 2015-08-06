<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>..:GID:..</title>
    <link rel="stylesheet" href="../assets/components/bootstrap/dist/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="../assets/components/select2/dist/css/select2.min.css" media="screen">
    <link rel="stylesheet" href="../assets/css/style.css" media="screen">
    <script  src="../assets/components/jquery/dist/jquery.js"></script>
    <script  src="../assets/components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
    
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});
    </script>
</head>
<body>

    

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


    <!-- container -->
    <div class="container">
        
        <!-- row -->
        <div class="row">
            
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



                

                                

                        <table class="table table-bordered table-hover table-striped" width="100%">
                            <thead>
                                <tr>
                                    <th>Pai</th>
                                    <th>Filho1 <br> Santiago</th>
                                    <th>Filho2 <br> Luis Cládio</th>
                                    <th>Filho3 <br> Eduardo</th>
                                    <th>Filho4 <br> Emerson</th>
                                    <th>Filho5<br> Cristiano</th>
                                    <th>Filho6<br> Denis</th>
                                    <th>Filho7  <br> Joaquim</th>
                                    <th>Filho8  <br> Rafael</th>
                                    <th>Filho9  <br> Santiago</th>
                                    <th>Filho10 <br> Marcelo Mathias</th>
                                    <th>Filho11 <br> Marcelo Ferraz</th>
                                    <th>Filho12 <br> Domingos</th>
                                    <th>Filho13 <br> Odirle</th>
                                    <th>Filho14 <br> Luciano</th>
                                    <th>Filho15 <br> Emerson</th>
                                    <th>Filho16 <br> Ronaldo</th>
                                    <th>Filho17 <br> João Vicentes</th>
                                    <th>Acertos</th>
                                    <th>IP</th>
                                </tr>
                            </thead>
                            <tbody>
<?php

    $arquivo = fopen('../palpites.csv','r');
    if ($arquivo == false) die('Não foi possível abrir o arquivo.');
    $line = 1;
    while(true) {
        $linha = fgets($arquivo);

        //verfica o final do arquivo
        if ($linha==null) {
            break;
        }
        
        if ($line++ == 1){ //este IF tem como função pular a primeira linha do arquivo .CSV, pois ali constam os nomes dos campos, que não nos interessam.
            continue;
        }
        
        $row = explode(';', $linha);
?>
        <tr>
            <td><?= $row[0] ?></td>
            <?=($row[1]== 'Santiago Montealegre Quijano')?'<td class="success" title="'.$row[1].'" data-toggle="tooltip" data-placement="right" >Acertou</td>':'<td class="warning"  title="'.$row[1].'" data-toggle="tooltip" data-placement="right" >Errou</td>'; ?>
            <?=($row[2]== 'Luís Cláudio de Lima Assunção')?'<td class="success" title="'.$row[2].'" data-toggle="tooltip" data-placement="right" >Acertou</td>':'<td class="warning"  title="'.$row[2].'" data-toggle="tooltip" data-placement="right" >Errou</td>'; ?>
            <?=($row[3]== 'Eduardo Antônio Sanches')?'<td class="success" title="'.$row[3].'" data-toggle="tooltip" data-placement="right" >Acertou</td>':'<td class="warning"  title="'.$row[3].'" data-toggle="tooltip" data-placement="right" >Errou</td>'; ?>
            <?=($row[4]== 'Emerson Kened Bento')?'<td class="success" title="'.$row[4].'" data-toggle="tooltip" data-placement="right" >Acertou</td>':'<td class="warning"  title="'.$row[4].'" data-toggle="tooltip" data-placement="right" >Errou</td>'; ?>
            <?=($row[5]== 'Cristiano Ricardo Paiva')?'<td class="success" title="'.$row[5].'" data-toggle="tooltip" data-placement="right" >Acertou</td>':'<td class="warning"  title="'.$row[5].'" data-toggle="tooltip" data-placement="right" >Errou</td>'; ?>
            <?=($row[6]== 'Denis Vidal de Jesus')?'<td class="success" title="'.$row[6].'" data-toggle="tooltip" data-placement="right" >Acertou</td>':'<td class="warning"  title="'.$row[6].'" data-toggle="tooltip" data-placement="right" >Errou</td>'; ?>
            <?=($row[7]== 'Joaquim Milbeyer Marcineiro')?'<td class="success" title="'.$row[7].'" data-toggle="tooltip" data-placement="right" >Acertou</td>':'<td class="warning"  title="'.$row[7].'" data-toggle="tooltip" data-placement="right" >Errou</td>'; ?>
            <?=($row[8]== 'Rafael Vilhena Reis Neto')?'<td class="success" title="'.$row[8].'" data-toggle="tooltip" data-placement="right" >Acertou</td>':'<td class="warning"  title="'.$row[8].'" data-toggle="tooltip" data-placement="right" >Errou</td>'; ?>
            <?=($row[9]== 'Santiago Montealegre Quijano')?'<td class="success" title="'.$row[9].'" data-toggle="tooltip" data-placement="right" >Acertou</td>':'<td class="warning"  title="'.$row[9].'" data-toggle="tooltip" data-placement="right" >Errou</td>'; ?>
            <?=($row[10]== 'Marcelo Ribeiro Mathias Duarte')?'<td class="success" title="'.$row[10].'" data-toggle="tooltip" data-placement="right" >Acertou</td>':'<td class="warning"  title="'.$row[10].'" data-toggle="tooltip" data-placement="right" >Errou</td>'; ?>
            <?=($row[11]== 'Marcelo Vieira Ferraz')?'<td class="success" title="'.$row[11].'" data-toggle="tooltip" data-placement="right" >Acertou</td>':'<td class="warning"  title="'.$row[11].'" data-toggle="tooltip" data-placement="right" >Errou</td>'; ?>
            <?=($row[12]== 'Domingos Garrone Neto')?'<td class="success" title="'.$row[12].'" data-toggle="tooltip" data-placement="right" >Acertou</td>':'<td class="warning"  title="'.$row[12].'" data-toggle="tooltip" data-placement="right" >Errou</td>'; ?>
            <?=($row[13]== 'Odirlei Alves Tavares')?'<td class="success" title="'.$row[13].'" data-toggle="tooltip" data-placement="right" >Acertou</td>':'<td class="warning"  title="'.$row[13].'" data-toggle="tooltip" data-placement="right" >Errou</td>'; ?>
            <?=($row[14]== 'Luciano Kenji Tanaka')?'<td class="success" title="'.$row[14].'" data-toggle="tooltip" data-placement="right" >Acertou</td>':'<td class="warning"  title="'.$row[14].'" data-toggle="tooltip" data-placement="right" >Errou</td>'; ?>
            <?=($row[15]== 'Emerson Kened Bento')?'<td class="success" title="'.$row[15].'" data-toggle="tooltip" data-placement="right" >Acertou</td>':'<td class="warning"  title="'.$row[15].'" data-toggle="tooltip" data-placement="right" >Errou</td>'; ?>
            <?=($row[16]== 'Ronaldo Pavarini')?'<td class="success" title="'.$row[16].'" data-toggle="tooltip" data-placement="right" >Acertou</td>':'<td class="warning"  title="'.$row[16].'" data-toggle="tooltip" data-placement="right" >Errou</td>'; ?>
            <?=($row[17]== 'João Vicente')?'<td class="success" title="'.$row[17].'" data-toggle="tooltip" data-placement="right" >Acertou</td>':'<td class="warning"  title="'.$row[17].'" data-toggle="tooltip" data-placement="right" >Errou</td>'; ?>
            <td><?= $row[18] ?></td>
            <td><?= $row[19] ?></td>
        </tr>
        
<?php

    }
    fclose($arquivo);

?>
                            </tbody>                            
                        </table>                
    
                
                
                
               

            

            
        </div>
        <!-- /row -->
        
    </div>
    <!-- container -->
      
</body>
</html>
