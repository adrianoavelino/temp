<?php
session_start();
        
$error = array();
$palpite = $_SESSION['email'] . ';';//dados dos usuários que já palpitaram que será inserido no arquivo
include_once './filhos.php';

//valida os campos
for ($i=1;$i<17;$i++) {
    $filho = 'filho' .$i;
    if (!isset($_POST[$filho])) {
        $error[] = "Você não selecionou o pai para o Filho " . $i;
    }
}

//verifica se o usuário já votou
//if (count($error) == 0) {
//    $arquivo = fopen('palpites.csv','r');
//    if ($arquivo == false) die('Não foi possível abrir o arquivo.');
//    while(true) {
//        $linha = fgets($arquivo);
//
//        //verfica o final do arquivo
//        if ($linha==null) {
//            break;
//        }
//        
//        $l = explode(';', $linha);
//        if ($_SESSION['email'] == $l[0]) {
//            $error[] = 'Você já deu o seu palpite!';
//        }
//    }
//    fclose($arquivo);    
//}

if (count($error)>= 1) {
    echo "<div class='alert alert-danger'>";
    foreach ($error as $err) {
        echo $err . "<br />";
    }
    echo "</div>";
} else {
    
    $cont = 0;
    foreach ($_POST as $resposta => $value) {
//        echo $resposta;  //chave
//        echo $value; //valor
        foreach ($filhos as $filho) {
            if ($filho['pai'] ==  $value && $filho['id'] == $resposta) {
                $cont++;
            }            
        }
//        $palpite .= $value . ';';
        $palpite .= trim(filter_input(INPUT_POST, $filho['id'], FILTER_SANITIZE_STRING)) . ';';
    }
    
    
    $arquivo = fopen('palpites.csv','a');
    if ($arquivo) {
        $palpite .= $cont;
	if (!fwrite($arquivo, "\n" .$palpite)) {
            die('Não foi possível atualizar o arquivo.');
        }
        echo "<div class='alert alert-success'>";
        echo "Palpite enviado com sucesso!<br />";
        echo "Você teve " . "<strong>" . $cont . "</strong> acerto(s)" ;
        echo "</div>";  	
	fclose($arquivo);
    }     
    
}

