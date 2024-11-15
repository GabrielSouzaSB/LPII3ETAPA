Tot = localStorage.getItem('valor');
document.getElementById('valortot').value = Tot;

function enviado() {
    nome = (nome.value);

    if(nome=="") {
        alert('Preencha os campos faltantes');
        return false;
    }
    else {
        alert(`Olá ${$nome}! Sua reserva foi feita com sucesso!`);
        window.location = "landing.php";
        //   location.href="landing.html";
        return false;
        
        
    }
}

function pessoa(obj) {
    if(obj == "pf") {
        document.getElementById('cpf').style.display = "block";
        document.getElementById('cnpj').style.display = "none";
    

    } else {
        document.getElementById('cpf').style.display = "none";
        document.getElementById('cnpj').style.display = "block";
        
    }

}

function senha() {
   let sen1 = document.getElementById('senha1').value;
   let sen2 = document.getElementById('senha2').value;

   if(sen1 != sen2) {
        document.getElementById('msg').style.display = "block";
   } else {
        document.getElementById('msg').style.display = "none";
   }
}

function abrir() {
    let pagamento = document.getElementById('pagamento').value;
    if(pagamento == "Cartão") {
        document.getElementById('cartao').style.display = "block";
        document.getElementById('dinheiro').style.display = "none"
    } else if (pagamento == "Dinheiro") {
        document.getElementById('dinheiro').style.display = "block";
        document.getElementById('cartao').style.display = "none";
        
    }
}

function mascara_cpf(obj) {
    if(obj.value.length == 3) {
        obj.value += ".";
    }
    else if (obj.value.length == 7) {
        obj.value += ".";
    }
    else if (obj.value.length == 11) {
        obj.value += "-"
    }
}

function mascara_cartao(obj) {
    if(obj.value.length == 4) {
        obj.value += " ";
    }
    else if (obj.value.length == 9) {
        obj.value += " ";
    }
    else if (obj.value.length == 14) {
        obj.value += " ";
    }
}

function mascara_cnpj(obj) {
    if(obj.value.length == 2 ) {
        obj.value += ".";
    }
    else if (obj.value.length == 6 ) {
        obj.value += ".";
    }
    else if (obj.value.length == 10 ) {
        obj.value += "/";
    }
    else if (obj.value.length == 15) {
        obj.value += "-";
    }
}

function mascara_telefone(obj) {
    if(obj.value.length == 0) {
        obj.value += "(";
    }
    else if (obj.value.length == 3) {
        obj.value += ")"
    }
    else if (obj.value.length == 9) {
        obj.value += "-"
    }
}

function mascara_vencimento(obj) {
    if(obj.value.length == 2) {
        obj.value += "/"
    }
}

function parcelado() {
    let parcelamento = document.getElementById('parcela').value;
    Tot
    let valorParc
    let vezes 
    if(parcelamento == "12vz") {
        valorParc = Tot / 12;
        document.getElementById('valorparcela').value = valorParc.toFixed(2);
        document.getElementById('parcelado').style.display = "block";
        vezes = "12x de"
    }
    else if (parcelamento == "8vz") {
        valorParc = Tot / 8;
        document.getElementById('valorparcela').value = valorParc.toFixed(2);
        document.getElementById('parcelado').style.display = "block";
        vezes = "8x de"
        
    }
    else if (parcelamento == "4vz") {
        valorParc = Tot / 4;
        document.getElementById('valorparcela').value = valorParc.toFixed(2);
        document.getElementById('parcelado').style.display = "block";
        vezes = "4x de"
    }
    
    else if (parcelamento == "nao") {
        valorParc = Tot;
        document.getElementById('parcelado').style.display = "none";
    }
    
    document.getElementById("valortot").value = Tot;
    document.getElementById("vz").value = vezes;
}

function salto(campo,digito) {
    if(campo == "cpf") {
        if(digito.length > 13 ) {
            document.getElementById('telefone').focus();
        }
    }
    else if (campo == "cnpj") {
        if(digito.length > 17) {
            document.getElementById('telefone').focus();
        }
    }
    else if (campo == "telefone") {
        if(digito.length > 13) {
            document.getElementById('pagamento').focus();
        }
    }
    else if (campo == "num") {
        if(digito.length > 18) {
            document.getElementById('cvv').focus();
        }
    }
    else if (campo == "cvv") {
        if(digito.length > 2) {
            document.getElementById('ven').focus();
        }
    }
    else if (campo == "ven") {
        if(digito.length > 4) {
            document.getElementById('bandeira').focus();
        }
    }
}

function somente_numero(e){
    let tecla = (window.event)?event.keyCode:e.which;

    if ((tecla >= 48 && tecla <= 57) || (tecla >= 96 && tecla <= 105) || (tecla == 8) || (tecla == 39) || (tecla == 46)){
        return true;
    } else{
        return false;
    }
}

function teste() {
    valor = document.getElementById('valorfinal').value;
    localStorage.setItem('valor', valor);
}

function ver() {
    document.getElementById('valortot').value = localStorage.getItem('valor');
}






