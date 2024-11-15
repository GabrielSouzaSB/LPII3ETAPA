<?php

    include "../adm/conexao.php";

    if(isset($_POST['login'])){
        
        
        $login = $_POST['login'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        


        $sql = "update usuario set nome = '$nome', login = '$login', email = '$email'  where login = '$login'";
        $alterar = mysqli_query($conexao,$sql);


       
        if($alterar){
            echo "
                <script>
                    alert('Registro Alterado com Sucesso!');
                    window.location = 'listar_usuario.php';
                </script>
            ";
        }
        else{
            echo "
                <p> Banco de Dados Temporariamente fora do ar. Tente novamente mais tarde. </p>
            ";
            echo mysqli_error($conexao);
        }
    }
    else { 
        echo "
            <p> Esta é uma página de tratamento de dados. </p>
            <p> Clique <a href='listar_usuario.php'> aqui </a> para a acessar a lista de usuários cadastrados. </p>
        ";
    }


?>