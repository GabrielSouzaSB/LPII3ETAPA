<?php
    include "../adm/conexao.php";

    if(isset($_GET['login'])){
        
        $login = $_GET['login']; 

        $sql = "delete from usuario where login = '$login'";
        $excluir = mysqli_query($conexao,$sql);

        if($excluir){
            echo "
                <script> 
                    alert('Registro Excluído com Sucesso!');
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
            <p> Esta é uma página de tratamento de dados </p>
            <p> Clique <a href='listar_usuario.php'> aqui </a> para a acessar a lista de usuários cadastrados. </p>
        ";
    }
?>