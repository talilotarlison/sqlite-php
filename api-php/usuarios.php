<?php
header('Content-Type: application/json; charset=utf-8');

// Le o arquivo usuarios.json
$json = file_get_contents("usuarios.json");
#$usuarios = json_decode($json, true);

// Retorna os dados como JSON
#echo json_encode($usuarios);


if ($json === false) {
    echo "Erro ao ler o arquivo.";
} else {
    // Decodifica os dados como um array associativo
    $usuarios = json_decode($json, true);

    if ($usuarios === null) {
        echo "Erro ao decodificar o JSON.";
    } else {
        // Retorna os dados como JSON
        echo json_encode($usuarios);
    }
}
?>