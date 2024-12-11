<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Fazer cadastro:</h1>
   <form method="post" action="cadastar-user.php">
        <label for='email'>Usuario:</label><br>
        <input type="e-mail" name="email" id="email" placeholder="Digite seu e-mail aqui" required><br>
        <label for="senha">Senha:</label><br>
        <input type="password" name="senha" id="senha" placeholder="Digite seu senha aqui" required minlength='8'><br>
        <input type="submit" name="enviar" value="Cadastrar">  
        <a href="index.php">Fazer login.</a>   
    </form>
  </body>
</html>



