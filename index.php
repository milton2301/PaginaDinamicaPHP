<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Amilton">
    <title>Amilton Desenvolvimentos</title>
    <link rel="shortcut icon" href="favorito.png" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
    <script src="etsilo.js"></script>
    
</head>
<body>
    
    <h1>Desenvolvimento & Negócios</h1>

    <h2>Fazemos o futuro acontecer</h2>

    <p>Aqui o seu negócio vai para frente, conte com nossos profissionais para fazer o futuro <strong>acontecer agora na sua empresa</strong>!</p>
    <p>Profissionais treinados e preparados para trabalhar com as tecnologias <u>mais atuais do mercado.</u></p>
    
    <nav id="menu" >
        <ul type="square">
            <img src="fotofuturo.jfif" alt="fotofuturo" width="100px">
            <li>Login</li>
            <li>Contatos</li>
            <li><a href="cadastro.php" target="_blank" rel="next">Cadastre-se</a></li>
        </ul>
    </nav>

    <table id="tabela">
        <h3>Valores mensais dos planos</h3>
        <thead>
            <th>Plano</th>
            <th> <a href="servicos.php?servico=erp">ERP</a></th>
            <th><a href="servicos.php?servico=sites">Sites</a></th>
            <th><a href="servicos.php?servico=hospedagem">Hospedagem</a></th>
            <th><a href="servicos.php?servico=cloud">Serviços em Cloud</a></th>
        </thead>
        <tbody>
            <td>Premium</td>
            <td>R$ 1.500,00</td>
            <td>R$ 550,00</td>
            <td>R$ 200,00</td>
            <td>R$ 650,00</td>
        </tbody>
        <tbody>
            <td>Medio</td>
            <td>R$ 1.000,00</td>
            <td>R$ 400,00</td>
            <td>R$ 150,00</td>
             <td>R$ 500,00</td>
        </tbody>
    </table>
    <br>
    <div class="notifica">
        <input type="radio" name="rd" value="a" onclick="mostra('a')">
        <label for="radio">Marque aqui se gostaria notificações por e-mail?</label>
            <div id="dados" style="visibility:hidden">
                <label for="text">Insira seu e-mail: </label>
                <input type="text" name="email" placeholder="Insira seu e-mail">
                <input type="submit" value="Enviar" onclick="recarregar();">
            </div>  
    </div>
    <br>

    <audio preload="metadata" controls autoplay>
        <source src="astronaut.mp3" type="audio/mpeg">
    </audio>

    <footer class="footer"><i>Para mais duvidas entre em contato conosco por <a href="mailto:amiltongomes2301@gmail.com">e-mail</a></i></footer>
</body>
</html>