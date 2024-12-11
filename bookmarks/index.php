<?php


?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Entre:</h1>
   <form method="post" action="validar.php">
        <label for='email'>Usuario:</label><br>
        <input type="e-mail" name="email" id="email" placeholder="Digite seu e-mail aqui" required><br>
        <label for="senha">Senha:</label><br>
        <input type="password" name="senha" id="senha" placeholder="Digite seu senha aqui" required minlength='8'><br>
        <input type="submit" name="enviar" value="Entrar">
        <a href="cadastro.php">Fazer cadastro.</a>    
    </form>
  </body>
</html>

