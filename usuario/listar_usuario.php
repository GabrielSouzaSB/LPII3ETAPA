<?php
    include "../adm/conexao.php";
    include "../adm/topo1.php";
    include "../adm/segurancaAdm.php";


    $sql = "select * from usuario order by login";
    $seleciona = mysqli_query($conexao,$sql);

?>

        <div class="text-end mt-5">
            <a href="usuario.php">
                <button class="btn btn-success">
                    Cadastrar Novo 
                </button>
            </a>
        </div>

        <h1 class="text-center mt-3 mb-3"> Lista de Usuários </h1>

        
        <div class="row mb-2 bg-dark text-light text-center p-3">
            <div class="col-1"> Foto </div>
            <div class="col-2"> Login </div>
            <div class="col-1"> Senha </div>
            <div class="col-2"> Nome </div>
            <div class="col-2"> Email </div>
            <div class="col-2"> Nivel </div>
            <div class="col-2"> Controle </div>
        </div>

        <?php
            while ($exibe = mysqli_fetch_array($seleciona)){
                $login = $exibe['login'];
        ?>
                <div class="row text-center p-1">
                    <div class="col-1 foto"> <img src="<?php echo $exibe['foto'] ?>"> </div>
                    <div class="col-2"> <?php echo $exibe['login'] ?></div>
                    <div class="col-1"> *** </div>
                    <div class="col-2"> <?php echo $exibe['nome'] ?> </div>
                    <div class="col-2"> <?php echo $exibe['email'] ?> </div>
                    <div class="col-2"> <?php echo $exibe['nivel'] ?> </div>
                    <div class="col-2 icones"> 
                        <a href="ver.php?login=<?php echo $login?>"><img style="width: 1.3em;"  src="../img/ver.png"></a> 
                        <a href="editar.php?login=<?php echo $login?>"><img style="width: 1.3em;"  src="../img/editar.png"></a>
                        <a href="deletar.php?login=<?php echo $login?>" onclick="return confirm('Confirma a Exclusão do Registro?')"><img style="width: 1.3em;"  src="../img/delete.png"></a>
                    </div>
                </div>
        <?php
            }
        ?>

<?php
    include "../adm/rodape1.php";
?>
