<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="Cadastro.jpg" type="image/x-icon">
    <link rel="stylesheet" href="estiloCad.css">
    <script src="etsilo.js"></script>
</head>
<body>

    <div class="container">
        <div class="titulo">Bem vindo ao cadastro</div>
        <form action="cadastro.php">
            <div class="usuario">
                <div class="entrada_dados">
                    <span for="user" class="dados">Nome:</span>
                    <input type="text" id="user" name="user" placeholder="Nome e sobrenome" required="required"/>
                <div class="entrada_dados">
                    <span for="cpfid" class="dados">CPF:</span>
                    <input type="text" id="cpfid" placeholder="Insira seu CPF" required="required"/>
              <div class="entrada_dados">
                    <span for="foneid" class="dados">Telefone</span>
                    <input type="text" id="foneid" placeholder="Insira telefone" required="required"/>
                <div class="entrada_dados">
                    <span for="emailid" class="dados">Email:</span>
                    <input type="text" id="emailid" placeholder="Insira seu e-mail" required="required"/>
                <div class="entrada_dados">
                    <span for="psw" class="dados">Senha</span>
                    <input id="psw" name="psw" type="password" required placeholder="Insira sua senha"/>
                <div class="entrada_dados">
                    <span for="cpsw" class="dados">Confimar</span>
                    <input type="password" id="cpsw" name="cpsw" required placeholder="Confirmar senha"/>
                </div>
            </div>
                <br>          
            <?php
                if(isset($_GET['cpsw'])){
                    if($_GET['psw'] != $_GET['cpsw']){
                        echo 'Senhas diferentes!';
                    }elseif($_GET['psw'] == $_GET['cpsw']){
                        header('Location: agradecimento.html');
                    } 
                }
        
            ?> 
                <div class="button">
                <input type="submit" id="enviar" class="enviar" onclick="usuario();" value="Enviar"/>
            </div>
        </form>
    </div>
    <footer class="footer">
        <a href="index.php" rel="prev">Home</a>
        <a href="http://academico.ielpr.org.br/webaluno/" target="_blank" rel="external">IEL</a>
    </footer>
    
</body>

</html>