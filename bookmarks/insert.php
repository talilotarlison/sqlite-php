<?php

$db = new SQLite3('db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
$db->enableExceptions(true);

$nome = $_GET['nome'];
$email = $_GET['email'];


//$db->exec("create table IF NOT EXISTS  Users(nome varchar(50), sobrenome varchar(50))");

$db->exec('BEGIN');
$query = 'INSERT INTO Users (nome,sobrenome) VALUES ("'.$nome.'","'.$email.'")';
$db->query($query);

//$db->exec('INSERT INTO Users (nome,sobrenome) VALUES ("joao filho ","vera de araujo")');
//$db->exec("INSERT INTO Users (nome,sobrenome) VALUES ('hhhtalilot','tffsa')");
//$db->exec("INSERT INTO Users (nome,sobrenome) VALUES ('hhhhttttttt','tajghkgkt')");
$db->exec('COMMIT');

$db->close();


?>