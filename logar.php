<?php 
session_start();
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$matricula = trim(filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING));

$professor = array(
    array(
        "nome" => 'Santiago Montealegre Quijano',
        "email" => 'smquijano@registro.unesp.br',
        "matricula" => '3135380'        
    ),
    array(
        "nome" => 'Luis Carlos Ferreira de Almeida',
        "email" => 'luiscarlos@registro.unesp.br',
        "matricula" => '3131981'        
    ),
    array(
        "nome" => 'Eduardo Antônio Sanches',
        "email" => 'sanches@registro.unesp.br',
        "matricula" => '3135779'        
    ),
    array(
        "nome" => 'Emerson Kened Bento',
        "email" => 'emerson@registro.unesp.br',
        "matricula" => '3130381'        
    ),
    array(
        "nome" => 'Cristiano Ricardo Paiva',
        "email" => 'ricardocont@registro.unesp.br',
        "matricula" => '3122750'        
    ),
    array(
        "nome" => 'Denis Vidal de Jesus',
        "email" => 'dvj@registro.unesp.br',
        "matricula" => '3127667'        
    ),
    array(
        "nome" => 'Rafael Vilhena Reis Neto',
        "email" => 'rafaelneto@registro.unesp.br',
        "matricula" => '3135329'        
    ),
    array(
        "nome" => 'Marcelo Ribeiro Mathias Duarte',
        "email" => 'mrmathias@registro.unesp.br',
        "matricula" => '3130459'        
    ),
    array(
        "nome" => 'Marcelo Vieira Ferraz',
        "email" => 'ferraz@registro.unesp.br',
        "matricula" => '3131051'        
    ),
    array(
        "nome" => 'Domingos Garrone Neto',
        "email" => 'garroneneto@registro.unesp.br',
        "matricula" => '3135767'        
    ),
    array(
        "nome" => 'Odirlei Alves Tavares',
        "email" => 'odirlei@registro.unesp.br',
        "matricula" => '3128507'        
    ),
    array(
        "nome" => 'Luciano Kenji Tanaka',
        "email" => 'luciano.tanaka@registro.unesp.br',
        "matricula" => '3138070'        
    ),
    array(
        "nome" => 'Ronaldo Pavarini',
        "email" => 'rpavarini@registro.unesp.br',
        "matricula" => '3123339'        
    ),
    array(
        "nome" => 'João Vicente Coffani Nunes',
        "email" => 'jvcoffani@registro.unesp.br',
        "matricula" => '3122244'           
    ),
    array(
        "nome" => 'Joaquim Milbeyer Marcineiro',
        "email" => 'joaquimm@registro.unesp.br',
        "matricula" => '3137508'           
    ),
    array(
        "nome" => 'Joao Teste dos Testes',
        "email" => 'joao@email.com',
        "matricula" => '1111111'        
    )
);

$error = array();

//verifica email
if (strlen($email) < 1) {
    $error[] = 'Preencha o campo E-mail';
} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error[] = 'E-mail inválido';
}

//verifica matricula
if (strlen($matricula) != 7) {
    $error[] = 'A matrícula deve ter 7 digitos (somente números)';
}

//verifica se já votou
//if (count($error) == 0) {
//    $arquivo = fopen('palpites.csv','r');
//    if ($arquivo == false) die('Não foi possível abrir o arquivo.');
//    $i = 1;
//    while(true) {
//            $linha = fgets($arquivo);
//
//            //verfica o final do arquivo
//            if ($linha==null) {
//                break;
//            }
//            if($i > 1) {
//                $l = explode(';', $linha);
//                
//                if ($email == $l[0]) {
//                    $error[] = 'Você já participou!';
//                }
//            }
//            $i++;
//    }
//    fclose($arquivo);    
//}



if (count($error) > 0) {
    echo "<div class='alert alert-danger col-sm-12 col-xs-10'>";
    foreach ($error as $err) {
        echo $err . "<br />";
    }
    echo "</div>";
} else {
    $login = false;
    $nome = NULL;
    foreach ($professor as $key ) {
        if (in_array($email, $key) && in_array($matricula, $key)) {
            $login = true;
            $nome = $key['nome'];
        }
    }
    
    if ($login) {
        $_SESSION['email'] = $email;
        echo '1';
    } else {
        echo "<div class='alert alert-danger col-sm-12 col-xs-10'>";
        echo "Uusário ou matrícula inválidos";
        echo "</div>";   
       
    }
}



