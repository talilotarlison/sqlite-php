<?php

 $server = "localhost";  // Servidor do banco de dados (normalmente "localhost" para servidores locais)
 $username = "root";     // Nome de usuário do banco de dados
  $password = "";         // Senha do banco de dados
 $db = "favoritos";   // Nome do banco de dados que estamos usando



      // Criar uma conexão com o banco de dados usando MySQLi
      $connection = mysqli_connect($server, $username, $password, $db);

      // Verificar se a conexão foi bem-sucedida
      if (mysqli_connect_errno()) {
          die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
      }else{
        echo "concetado com sucesso";
      }

      // Configurar o conjunto de caracteres para UTF-8 (opcional, mas recomendado)
      mysqli_set_charset($connection, "utf8");

      // Retornar a conexão para ser usada em outras partes do projeto

      $query = "INSERT INTO favoritos (id, nome , url) VALUES(null, 'jesusu', 'jeusucrsito')";
		mysqli_query($connection,$query);
