<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <div style="background-color: coral;" class=" d-flex justify-content-between align-items-center container-fluid text-dark p-4">
            <div class="text-start">
                <a class="text-dark text-decoration-none" href="index.php">
                  <h4 style="font-weight: 700; margin: -0.5rem;">Booking.com</h4>
                </a>
            </div>
            <div class="text-end">
              <?php
                  session_start();
                  if(isset($_SESSION['login'])){
                      $login = $_SESSION['login'];
                      $nome = $_SESSION['nome'];
                      $nivel = $_SESSION['nivel'];

                      echo"
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
        </div>
    </div>
    
    
