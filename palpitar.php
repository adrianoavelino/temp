<?php

session_start();


/**
 * Verifica o IP do usuário verificando o proxy
 * @return string
 * fonte: http://stackoverflow.com/questions/1420381/how-can-i-get-the-mac-and-the-ip-address-of-a-connected-client-in-php
 */
function kh_getUserIP(){
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP)){
        $ip = $client;
    }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
        $ip = $forward;
    }else{
        $ip = $remote;
    }
    return $ip;
}
    
$error = array();
$palpite = $_SESSION['email'] . ';';//dados dos usuários que já palpitaram que será inserido no arquivo
$ip = kh_getUserIP();

include_once './filhos.php';

//valida os campos
for ($i=1;$i< count($filhos);$i++) {
    $filho = 'filho' .$i;
    if (!isset($_POST[$filho]) || strlen($_POST[$filho]) < 1) {
        $error[] = "Você não selecionou o pai para o Filho " . $i;
    }
}

//verifica se o usuário já votou
if (count($error) == 0) {
    $arquivo = fopen('palpites.csv','r');
    if ($arquivo == false) die('Não foi possível abrir o arquivo.');
    while(true) {
        $linha = fgets($arquivo);

        //verfica o final do arquivo
        if ($linha==null) {
            break;
        }

        $l = explode(';', $linha);
        if ($_SESSION['email'] == $l[0]) {
            $error[] = 'Você já deu o seu palpite!';
        }
    }
    fclose($arquivo);
}

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
            $palpite .= trim(filter_input(INPUT_POST, $filho['id'], FILTER_SANITIZE_STRING)) . ';';
        }

    }


    $arquivo = fopen('palpites.csv','a');
    if ($arquivo) {
        $palpite .= $cont . ';'. $ip;
	if (!fwrite($arquivo, "\n" .$palpite)) {
            die('Não foi possível atualizar o arquivo.');
        }
?>
                    <div class="text-center" style="margin-bottom: 5em">
                        <h1 style="font-size: 7em; color: #ff3333">
                            Feliz Dia dos Pais!
                        </h1>
                            <?php
                                if ($cont < 10) {
                                    echo '<img src="./assets/img/alvo.jpg" alt="">';
                                } else {
                                    echo '<img src="./assets/img/ranking.png" alt="">';
                                }
                            ?>
                        
                        
                        <h2 style="font-size: 4em; color: #008000;">Você teve  <?=$cont;?> acerto(s) </h2>
                        <h2 style="font-size: 3em; color: #122b40;">Obrigado pela participação</h2>
                        <br>
                        <h4>GID - <em> Grupo Interdisciplinar de Desenvolvimento</em></h4>
                        
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>                                
                        
                    </div>
<?php
	fclose($arquivo);
    }

}
