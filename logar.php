<?php 
session_start();
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));

$error = array();

//verifica email
if (strlen($email) < 1) {
    $error[] = 'Preencha o campo E-mail';
} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error[] = 'E-mail inválido';
}


//verifica se já votou
if (count($error) == 0) {
    
    $arquivo = fopen('palpites.csv','r');
    if ($arquivo == false) die('Não foi possível abrir o arquivo.');
    $i = 1;
    while(true) {
            $linha = fgets($arquivo);

            //interronpe o loop quando acabar as linhas
            if ($linha==null) {
                break;
            }
            
            if($i > 1) {
                $l = explode(';', $linha);
                
                if ($email == $l[0]) {
                    $error[] = 'Você já participou!';
                }
            }
            $i++;
    }
    fclose($arquivo);    
}

if (count($error) > 0) {
    echo "<div class='alert alert-danger col-sm-12 col-xs-10'>";
    foreach ($error as $err) {
        echo $err . "<br />";
    }
    echo "</div>";
} else {
    $_SESSION['email'] = $email;
    echo '1';
}

