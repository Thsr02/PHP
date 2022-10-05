<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <?php
    //inicia a sessão
    session_start();
    
    //registra o codigo do produto na sessão
    $_SESSION['nome']='Thiago';

    
    echo "<a href=\"Exerc01.php\">Clique aqui para entrar no site</a>"
    
    ?>
</body>
</html>