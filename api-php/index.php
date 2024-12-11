<?php
#https://horadecodar.com.br/como-retornar-json-atraves-do-php/
header('Content-Type: application/json; charset=utf-8');

header("Access-Control-Allow-Origin: *");

$login = [
    [
        "senha" => "Joao",
        "email" => "joao@example.com"
    ],
    [
        "senha" => "maria",
        "email" => "maria@example.com"
    ]
];



$frases = [
    "O sol nasce todos os dias.",
    "A água é essencial para a vida.",
    "A matemática é uma linguagem universal.",
    "A música tem o poder de emocionar.",
    "O amor é um sentimento profundo.",
    "A natureza é cheia de mistérios.",
    "A tecnologia está em constante evolução.",
    "A amizade é um tesouro valioso.",
    "O riso é o melhor remédio.",
    "A lua influencia as marés.",
    "A história molda o presente.",
    "A criatividade não tem limites.",
    "O conhecimento é uma jornada.",
    "A paciência é uma virtude.",
    "A liberdade é um direito fundamental.",
    "A felicidade está nas pequenas coisas.",
    "O tempo voa quando estamos nos divertindo.",
    "A perseverança leva ao sucesso.",
    "A honestidade é a base de relacionamentos sólidos.",
    "O universo é vasto e misterioso.",
    "A gentileza faz a diferença.",
      "A amizade é um tesouro valioso.",
    "O riso é o melhor remédio.",
    "A lua influencia as marés.",
    "A história molda o presente.",
    "A criatividade não tem limites.",
    "O conhecimento é uma jornada.",
    "A paciência é uma virtude.",
    "A liberdade é um direito fundamental.",
    "A felicidade está nas pequenas coisas.",
    "O tempo voa quando estamos nos divertindo.",
    "A perseverança leva ao sucesso.",
    "A honestidade é a base de relacionamentos sólidos.",
    "O universo é vasto e misterioso.",
    "A gentileza faz a diferença.",
    // Adicione mais frases aqui...
];

//include("usuarios.json");
// Lê o arquivo usuarios.json
//$json = file_get_contents("usuarios.php");
//$usuarios = json_decode($login);

// Retorna os dados como JSON
#echo json_encode($usuarios);

#$data = date('d/m/Y'); 
$hoje = date('d');


function retornarMensagemDoDia($dia) {
    return  $frases[dia - 1];
}

$resu = $frases[intval($hoje)-1];
 echo json_encode($resu);

?>
