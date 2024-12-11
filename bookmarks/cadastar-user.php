<?php
/*
* COMANDOS SQLITE PARA ATULIZAR DADOS
* ALTER TABLE Users add COLUMN  senha varchar(50);
* UPDATE Users SET senha = sobrenome;
* ALTER TABLE Users DROP COLUMN sobrenome;
* SELECT ROWid, * FROM Users ;
* DELETE from Users where ROWID = 16;
*
*
*/

# https://stackoverflow.com/questions/19565250/php-fatal-error-class-sqlite3-is-not-found-in

$db = new SQLite3('users', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
$db->enableExceptions(true);

$email = $_POST['email'];
$senha = $_POST['senha'];


//$db->exec("create table IF NOT EXISTS  Users(nome varchar(50), senha varchar(50))");

$db->exec('BEGIN');
$query = 'INSERT INTO Users (nome,senha) VALUES ("'.$email.'","'.md5($senha).'")';
$db->query($query);
/*
* $db->exec('INSERT INTO Users (nome,senha) VALUES ("user1 ","16546464")');
* $db->exec("INSERT INTO Users (nome,senha) VALUES ('user2','165465464')");
* $db->exec("INSERT INTO Users (nome,senha) VALUES ('user3','5498764646')");
*/

$db->exec('COMMIT');

$db->close();


?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro Usuario</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1><?='Usuario '. $email. " cadastrado com sucesso!" ?></h1>
    <p>Ecolha um apcao para proseguir:</p>
    <a href="index.php">Fazer Login</a><br>
    <a href="cadastro.php">Fazer novo cadastro.</a> 
  </body>
</html>

