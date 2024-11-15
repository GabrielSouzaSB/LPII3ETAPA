<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/landing.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Olá, mundo!</title>
  </head>
  <body>
    <!-- Imagem e texto -->
    <nav id="nav" class="navbar navbar-light">
        <a class="navbar-brand" href="index.php">Booking.com</a>

        <div class="text-end">
              <?php
                  session_start();
                  if(isset($_SESSION['login'])){
                      $login = $_SESSION['login'];
                      $nome = $_SESSION['nome'];
                      $nivel = $_SESSION['nivel'];

                      echo "
                          Bem vindo, $nome | 
                          <a href='/PROJETO APL - copia/adm/logout.php'> Logout </a>
                      ";
                      
                  }else{
                    echo"
                        <a href='/PROJETO APL - copia/adm/login.php'> LOGIN </a> |
                        <a href='/PROJETO APL - copia/usuario/usuario.php'> Não Possuo Cadastro </a>
                    ";
                  }
              ?>
            </div>
    </nav>
