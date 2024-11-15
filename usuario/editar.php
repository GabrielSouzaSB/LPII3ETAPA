<?php
    include "../adm/conexao.php";
    include "../adm/topo1.php";

    if(isset($_GET['login'])) {

        $login = $_GET['login'];

        $sql = "select * from usuario where login = '$login'";
        $seleciona = mysqli_query($conexao, $sql);
        $exibe = mysqli_fetch_array($seleciona);

        $nome = $exibe['nome'];
        $email = $exibe['email'];
        $senha = $exibe['senha'];
        
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="mt-3 text-center">Editar Aluno</h1>
        <hr>
        <form name="cadastro" method="post" action="update.php">
            <input type="hidden" name="login" value="<?=$login?>">

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?=$nome?>" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?=$email?>"required>
            </div> 
        
            <div class="mb-3 text-end">
                <button type="button" class="btn btn-warning" onclick="history.go(-1)">Voltar</button>
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </form>
        

<?php
    include "../adm/rodape2.php";

    }
    else {
        echo "
            <p> Esta é uma página de tratamento de dados. </p>
            <p> Clique <a href='listar_aluno.php'> aqui </a> para a acessar a lista de produtos cadastrados. </p>
        ";
    }
?>