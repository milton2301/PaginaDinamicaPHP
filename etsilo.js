
function usuario(){
    var usuarioDigitado = document.getElementById('user').value;
    document.write('<p style="color: red; font-size: 100px; text-align: center;">Obrigado pela confiancia, <br> '  + usuarioDigitado +'!<br> Cadastro realizado com sucesso!</p>');
    }

function mostra(i){
    if(i == 'a'){
        document.getElementById('dados').style.visibility = "visible";
    }else{
        document.getElementById('dados').style.visibility = "hidden";
    }
}

function recarregar(){
    location.reload('index.php');
}
