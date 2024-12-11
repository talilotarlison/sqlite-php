<?php

// Defina o nome do banco de dados SQLite
$database_name = 'meu_banco_de_dados.sqlite';

// Crie uma nova conexão com o banco de dados
$db = new SQLite3($database_name);

// Verifique se houve algum erro na criação do banco de dados
if (!$db) {
    die("Erro ao criar o banco de dados: " . $db->lastErrorMsg());
}

// Crie uma tabela dentro do banco de dados
$table_query = "CREATE TABLE exemplo (
                id INTEGER PRIMARY KEY,
                nome TEXT NOT NULL,
                idade INTEGER NOT NULL)";

$result = $db->exec($table_query);

// Verifique se houve algum erro na criação da tabela
if (!$result) {
    die("Erro ao criar a tabela: " . $db->lastErrorMsg());
}

// Feche a conexão com o banco de dados
$db->close();
?>