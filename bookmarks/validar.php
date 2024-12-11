<?php
//https://www.php.net/manual/pt_BR/class.sqlite3.php

include "class-query.php";
$db = new SQLite3('users', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
$db->enableExceptions(true);
//$db->close();


$email = $_POST['email'];
$senha = $_POST['senha'];

//$query =  "SELECT * FROM Users where nome = '". $email."' and senha = '".md5($senha)."'"; 
//echo  $query;

//$Consulta = New Query();

$query = Query::select($email,$senha);

$result = $db->query($query);
//var_dump($result->fetchArray());


$login = [];


while ($dados = $result->fetchArray(SQLITE3_ASSOC)) {
    // push no array 
  array_push($login,$dados);
} 



/*
* 
* foreach ($login as $key => $value) {
*   echo $value['nome'];
* }
* 
*/

//var_dump($login); 


?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Status Login</h1>
 	<?php

		if(empty($login)){
			echo "<p>Usuario não encontrao na base de dados</p><br>";
			echo '<a href="index.php">Fazer login novamente.</a>';
			//var_dump($login); 
		}elseif (sizeof($login) == 1 ) {
			// code...
			header("location: ./page/home.php");
			//echo "logado com sucesso";
			//var_dump($login); 
		}else{
			echo "<p>Erro inesperado ao fazer login.</p><br>";
			echo '<a href="index.php">Fazer login novamente.</a>';
		}

 	?>
  </body>
</html>


