<?php 
 if($_GET['servico'] == null){
     header('Location: index.php');
     die();
 }

 if($_GET['servico'] == 'erp'){
     $titulo = 'Mais sobre nosso ERP';
     $descricao = 'ERP é uma plataforma de software desenvolvida para interligar diversos departamentos de uma empresa, possibilitando a automação e armazenamento!';
 }elseif($_GET['servico'] == 'sites'){
     $titulo = 'Mais sobre nossos Sites';
     $descricao = 'Local na Internet identificado por um nome de domínio, constituído por uma ou mais páginas de hipertexto, que podem conter textos, gráficos e informações em multimídia!';
 }elseif($_GET['servico'] == 'hospedagem'){
    $titulo = 'Mais sobre nossos serviços de Hospedagem';
    $descricao = 'Hospedagem de site é o serviço de armazenamento de um site e disponibilização constante do mesmo na internet, ou seja, o serviço de hospedagem possibilitará que seu site seja visualizado 24h por dia em todo o mundo!';
}elseif($_GET['servico'] == 'cloud'){
    $titulo = 'Mais sobre nossos serviços de Cloud';
    $descricao = 'Computação em nuvem (em inglês, cloud computing), é um termo coloquial para a disponibilidade sob demanda de recursos do sistema de computador, especialmente armazenamento de dados e capacidade de computação, sem o gerenciamento ativo direto do utilizador!';
}else{
    header('Location: index.php');
    echo 'Página inexistente';
    die();
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mais sobre nossos serviços</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    
    <h1> <?php echo $titulo; ?></h1>
    <h1> <?php echo 'Descrição'; ?></h1>
    <h2> <?php echo $descricao; ?> </h2>

</body>
</html>