<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body id="vld-body">
    
    <main id="vld-main">
        <form id="cadastro" method="post" onsubmit="return enviado(); event.preventDefault();">

            <h1 class="text-center ">Cadastre-se no Booking.com para concluir sua reserva!</h1>

            <h2>Dados da sua conta:</h2>
            <div class="form-group">
              <label for="email">Nome</label>
              <input type="text" class="form-control" id="nome" placeholder="Nome" >
            </div>
            <div class="form-group">
              <label for="email">Endereço de email</label>
              <input type="email" class="form-control" id="email" placeholder="Email" required >
            </div>
            <div class="form-group">
              <label for="senha">Senha</label>
              <input type="password" class="form-control" name="senha1" id="senha1" placeholder="Senha" oninput="senha()" maxlength="6" >
            </div>
            <div class="form-group">
              <label for="confirm">Confirme sua senha</label>
              <input type="password" class="form-control" name="senha2" id="senha2" placeholder="Confirme sua senha" oninput="senha()" maxlength="6" >
              <span id="msg">* as senhas não conferem</span>
            </div>
            
            <h2>Dados do pagamento:</h2>
            
            <h6>Você é uma pessoa:</h6>
            <div class="form-group">
              <input type="radio" value="Pessoa Física" id="tipo" name="tipo" checked onchange="pessoa('pf')">
              <label for="tipo">Física</label>
              <input type="radio" value="Pessoa Jurídica" id="tipo2" name="tipo" onchange="pessoa('pj')">
              <label for="tipo2">Jurídica</label>
            </div>
            
            
            <div class="form-group" id="cpf">
              <label for="cpf">CPF</label>
              <input type="text" class="form-control" name="cpf" placeholder="999.999.999-99" checked onkeypress="mascara_cpf(this)" maxlength="14"  onkeyup="salto(this.name, this.value)" onkeydown="return somente_numero(event)">
            </div>
            
            <div class="form-group" id="cnpj">
              <label for="cnpj">CNPJ</label>
              <input type="text" class="form-control" name="cnpj" placeholder="99.999.999/9999-99" onkeypress="mascara_cnpj(this)" maxlength="18"  onkeyup="salto(this.name, this.value)" onkeydown="return somente_numero(event)">
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(99)99999-9999" onkeypress="mascara_telefone(this)" maxlength="14"  onkeyup="salto(this.name, this.value)" onkeydown="return somente_numero(event)">
            </div>

                  <div class="form-group"> 
                    <label id="label" for="pagamento">Formas de Pagamento</label>
                    <select name="pagamento" class="form-control" id="pagamento" onchange="abrir()" >
                      <option value="Dinheiro">Dinheiro</option>
                      <option value="Cartão">Cartão</option>
                    </select>
                  </div>

                  <div class="form-group" id="dinheiro">
                    <fieldset>
                      <p>Não se esqueça de efetuar o pagamento ao anfitrião ao deixar o imóvel! <br> <span>* Sujeito a multa</span></p>
                    </fieldset>

                  </div>
                  
                  <div class="form-group mb-4" id="cartao">
                     <fieldset>
                       <label for="num">Número do Cartão</label>
                       <input type="text" class="form-control" name="num" id="num"  onkeypress="mascara_cartao(this)" maxlength="19" onkeyup="salto(this.name, this.value)" onkeydown=" return somente_numero(event)">
                       <label for="cvv">Código de Segurança</label>
                       <input type="text" class="form-control" name="cvv" id="cvv" maxlength="3"  onkeyup="salto(this.name, this.value)" onkeydown=" return somente_numero(event)">
                       <label for="vencimento">Vencimento</label>
                       <input type="text" class="form-control" name="ven" id="ven" onkeypress="mascara_vencimento(this)" maxlength="5"  onkeyup="salto(this.name, this.value)"  onkeydown=" return somente_numero(event)">
                       <label for="bandeira">Bandeira</label>
                       <select name="bandeira" class="form-control" id="bandeira">
                        <option value="Mastercard">Mastercard</option>
                        <option value="Visa">Visa</option>
                       </select>
                    </fieldset>
                </div>
            
            <button type="submit" class="btn btn-dark">Enviar</button>
            <button type="button" onclick="history.go(-1)" class="btn btn-dark">Voltar</button>

          </form>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/script2.js"></script>
  </body>
</html>