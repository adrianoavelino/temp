<?php 
session_start();
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$matricula = trim(filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING));

$professor = array(
    array(
        "nome" => 'Adalmir da Silva Oliveira',
        "email" => 'adalmir@registro.unesp.br',
        "matricula" => '3124678'        
    ),
    array(
        "nome" => 'Adolpho Gustavo Freitas de Lima',
        "email" => 'adolpho@registro.unesp.br',
        "matricula" => '3133953'        
    ),
    array(
        "nome" => 'Adriana Kimie Kimura',
        "email" => 'adrianakk@registro.unesp.br',
        "matricula" => '3123170'        
    ),
    array(
        "nome" => 'Patrícia Soares Santiago',
        "email" => 'psantiago@registro.unesp.br',
        "matricula" => '3131993'        
    ),
    array(
        "nome" => 'Agnes de Paula Correa Vitor de Souza',
        "email" => 'agnescorrea@registro.unesp.br',
        "matricula" => '3137302'        
    ),
    array(
        "nome" => 'Alessandra de Souza Rodrigues',
        "email" => 'alesouza@registro.unesp.br',
        "matricula" => '3129834'        
    ),
    array(
        "nome" => 'Amazílio José de Castro Consolini',
        "email" => 'consolini@registro.unesp.br',
        "matricula" => '3122773'        
    ),
    array(
        "nome" => 'Anderson Lopes',
        "email" => 'anderson@registro.unesp.br',
        "matricula" => '3133205'        
    ),
    array(
        "nome" => 'Andre Hyro Vieira Yamamoto',
        "email" => 'andrehyro@registro.unesp.br',
        "matricula" => '3137181'        
    ),
    array(
        "nome" => 'Angélica Cristina Pereira da Silva',
        "email" => 'angelica@registro.unesp.br',
        "matricula" => '3136991'        
    ),
    array(
        "nome" => 'Arlete Reis Oereira de Andrade',
        "email" => 'arpereira@registro.unesp.br',
        "matricula" => '3129639'        
    ),
    array(
        "nome" => 'Carla Vanessa Ikeda',
        "email" => 'vanessaik@registro.unesp.br',
        "matricula" => '3123698'        
    ),
    array(
        "nome" => 'Cesar  Domingues de Oliveira',
        "email" => 'cdoliveira@registro.unesp.br',
        "matricula" => '3128222'        
    ),
    array(
        "nome" => 'Cleusa Mori',
        "email" => 'cleusamori@registro.unesp.br',
        "matricula" => '3137995'        
    ),
    array(
        "nome" => 'Danilo Eduardo Rozane',
        "email" => 'danilorozane@registro.unesp.br',
        "matricula" => '3132535'        
    ),
    array(
        "nome" => 'Dariane Beatriz Schoffen Enke',
        "email" => 'dariane@registro.unesp.br',
        "matricula" => '3135378'        
    ),
    array(
        "nome" => 'Donizete Rodrigues de Oliveira Junior',
        "email" => 'donizetejunior@registro.unesp.br',
        "matricula" => '3138010'        
    ),
    array(
        "nome" => 'Edson Luiz Sabino Isoo',
        "email" => 'edson_isoo@registro.unesp.br',
        "matricula" => '3134854'        
    ),
    array(
        "nome" => 'Eduardo Nardini Gomes',
        "email" => 'engomes@registro.unesp.br',
        "matricula" => '3133497'        
    ),
    array(
        "nome" => 'Elizete Alberghini de Oliveira',
        "email" => 'lizalberghini@registro.unesp.br',
        "matricula" => '3138008'        
    ),
    array(
        "nome" => 'Elza Alves Corrêa',
        "email" => 'alves.elza@registro.unesp.br',
        "matricula" => '3132171'        
    ),
    array(
        "nome" => 'Erick Willy Weissenberg Batista',
        "email" => 'erickwilly@registro.unesp.br',
        "matricula" => '3136760'        
    ),
    array(
        "nome" => 'Érico Rodrigues',
        "email" => 'erzootec@registro.unesp.br',
        "matricula" => '3131970'        
    ),
    array(
        "nome" => 'Érico Tadao Teramoto',
        "email" => 'eteramoto@registro.unesp.br',
        "matricula" => '3137594'        
    ),
    array(
        "nome" => 'Fabio Yamamoto',
        "email" => 'fabio.yamamoto@registro.unesp.br',
        "matricula" => '3133000'        
    ),
    array(
        "nome" => 'Fernando Kauê França',
        "email" => 'fernandofranca@registro.unesp.br',
        "matricula" => '3133199'        
    ),
    array(
        "nome" => 'Francisca Alcivania de Melo Silva',
        "email" => 'alcivania@registro.com.br',
        "matricula" => '3131830'        
    ),
    array(
        "nome" => 'Gabriella Palmejani Lopes',
        "email" => 'gplopes@registro.unesp.br',
        "matricula" => '3137612'        
    ),
    array(
        "nome" => 'Geovane Santos Glória',
        "email" => 'geovanesg@registro.unesp.br',
        "matricula" => '3132973'        
    ),
    array(
        "nome" => 'Giovana Bertini',
        "email" => 'gibertini@registro.unesp.br',
        "matricula" => '3122165'        
    ),
    array(
        "nome" => 'Gisele Marcelino da Silva',
        "email" => 'gimarcelino@registro.unesp.br',
        "matricula" => '3122463'        
    ),
    array(
        "nome" => 'Jamil Ramos Ferreira',
        "email" => 'jamil.ferreira@registro.unesp.br',
        "matricula" => '3136450'        
    ),
    array(
        "nome" => 'Jorge Massao Kanegae',
        "email" => 'jorgemassao@registro.unesp.br',
        "matricula" => '3133060'        
    ),
    array(
        "nome" => 'José Theodoro da Rosa Neto',
        "email" => 'theodoro@registro.unesp.br',
        "matricula" => '3132882'        
    ),
    array(
        "nome" => 'Julia Myriam de Almeida Pereita',
        "email" => 'juliaapereira@registro.unesp.br',
        "matricula" => '3137582'        
    ),
    array(
        "nome" => 'Juliana Domingues Lima',
        "email" => 'judlima@registro.unesp.br',
        "matricula" => '3123455'        
    ),
    array(
        "nome" => 'kelly botigeli sevegnani',
        "email" => 'kelly@registro.unesp.br',
        "matricula" => '3122610'        
    ),
    array(
        "nome" => 'Leandro José Grava de Godoy',
        "email" => 'legodoy@registro.unesp.br',
        "matricula" => '3131040'        
    ),
    array(
        "nome" => 'Lilian Cristina Makino',
        "email" => 'lilianmakino@registro.unesp.br',
        "matricula" => '3135664'        
    ),
    array(
        "nome" => 'Lucas Florêncio Mariano',
        "email" => 'lucaslvl@registro.unesp.br',
        "matricula" => '3135019'        
    ),
    array(
        "nome" => 'Luis Carlos Ferreira de Almeida',
        "email" => 'luiscarlos@registro.unesp.br',
        "matricula" => '3131981'        
    ),
    array(
        "nome" => 'Luis Claudio de Lima Assunção',
        "email" => 'luisclaudio@registro.unesp.br',
        "matricula" => '3122890'        
    ),
    array(
        "nome" => 'Mara Elisabete Pereira',
        "email" => 'marapereira@registro.unesp.br',
        "matricula" => '3137170'        
    ),
    array(
        "nome" => 'Marceli Yamamoto',
        "email" => 'marceli@registro.unesp.br',
        "matricula" => '3135202'        
    ),
    array(
        "nome" => 'Marcelo da Silva Soares',
        "email" => 'mssoares@registro.unesp.br',
        "matricula" => '3135706'        
    ),
    array(
        "nome" => 'Marcelo Domingos Chamma Lopes',
        "email" => 'lopesmdc@registro.unesp.br',
        "matricula" => '3131944'        
    ),
    array(
        "nome" => 'Maria Cândida de Godoy Gasparoto',
        "email" => 'mcgasparoto@registro.unesp.br',
        "matricula" => '3137600'        
    ),
    array(
        "nome" => 'Pablo Forlan Vargas',
        "email" => 'pablo@registro.unesp.br',
        "matricula" => '3132006'        
    ),
    array(
        "nome" => 'Patricia Gleydes Morgante',
        "email" => 'pgleydes@registro.unesp.br',
        "matricula" => '3122256'        
    ),
    array(
        "nome" => 'Paulo Sérgio Valdoski',
        "email" => 'paulovaldoski@yahoo.com.br',
        "matricula" => '3137193'        
    ),
    array(
        "nome" => 'Piero Iori',
        "email" => 'pieroiori@registro.unesp.br',
        "matricula" => '3136346'        
    ),
    array(
        "nome" => 'Reginaldo Barboza da Silva',
        "email" => 'rbsilva@registro.unesp.br',
        "matricula" => '3125531'        
    ),
    array(
        "nome" => 'Rinaldo Antonio Ribeiro Filho',
        "email" => 'rinaldo@registro.unesp.br',
        "matricula" => '3135366'        
    ),
    array(
        "nome" => 'Samuel Ferrari',
        "email" => 'ferrari@registro.unesp.br',
        "matricula" => '3131956'        
    ),
    array(
        "nome" => 'Silvia Helena Modenese Goral Silva',
        "email" => 'silvia@registro.unesp.br',
        "matricula" => '3121926'        
    ),
    array(
        "nome" => 'Thiago Moreira de Souza',
        "email" => 'tsouza@registro.unesp.br',
        "matricula" => '3137934'        
    ),
    array(
        "nome" => 'Vilmar Antonio Rodrigues',
        "email" => 'vilmar@registro.unesp.br',
        "matricula" => '3135676'        
    ),
    array(
        "nome" => 'Wilson Satoshi Ueno Funaki',
        "email" => 'wilsonfunaki@registro.unesp.br',
        "matricula" => '3137284'        
    ),
    array(
        "nome" => 'Wilson José Oliveira de Souza',
        "email" => 'souza@registro.unesp.br',
        "matricula" => '3131919'        
    ),
    array(
        "nome" => 'Adriano Avelino',
        "email" => 'adrianoavelino@registro.unesp.br',
        "matricula" => '3134301'        
    ),
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
if (count($error) == 0) {
    $arquivo = fopen('palpites.csv','r');
    if ($arquivo == false) die('Não foi possível abrir o arquivo.');
    $i = 1;
    while(true) {
            $linha = fgets($arquivo);

            //verfica o final do arquivo
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
    $login = false;
    $nome = NULL;
    
//autenticação baseada no array professor
//    foreach ($professor as $key ) {
//        if (in_array($email, $key) && in_array($matricula, $key)) {
            $login = true;
//            $nome = $key['nome'];
//        }
//    }
    
    if ($login) {
        $_SESSION['email'] = $email;
        echo '1';
    } else {
        echo "<div class='alert alert-danger col-sm-12 col-xs-10'>";
        echo "Uusário ou matrícula inválidos";
        echo "</div>";   
       
    }
}

//$professor2 = array(
//    array(
//        "nome" => 'Adalmir da Silva Oliveira',
//        "email" => 'adalmir@registro.unesp.br',
//        "matricula" => '3124678'        
//    ));
//
//$cont = 0;
//
//foreach ($professor as $prof) {
//    echo ++$cont ."<br>";
//}
//
//echo 'existe tantos ' . count($professor);


//
//
//
//echo "<pre>";
//print_r($professor);