<?php
    include "../adm/topo1.php";
?>

<h1 class="mt-3 text-center">Cadastro de Usuários</h1>
<hr>

<form name="form" method="post"    action="cadastrar_usuario.php">
    <div class="mb-3">
      <label for="login" class="form-label">Login</label>
      <input type="text" class="form-control" id="login" name="login">
    </div>
    <div class="mb-3">
      <label for="senha" class="form-label">Senha</label>
      <input type="password" class="form-control" id="senha" name="senha">
    </div>
    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
      <label for="foto" class="form-label">Foto</label>
      <input type="file" class="form-control" id="foto" name="foto">
    </div>
    
    <div class="mb-3 text-end">
      <button type="submit" class="btn btn-primary">Entrar</button>
      <button type="reset" class="btn btn-warning">Limpar</button>
    </div>
  </form>

  <?php
    include "../adm/rodape1.php";
  ?>