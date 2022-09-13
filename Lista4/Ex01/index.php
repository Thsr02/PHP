<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <?php
        session_start();
            
            $_SESSION['nome']='Thiago Rodrigues';

            echo "<p><a href=\"exerc01.php\">Clique aqui para acessar o site</a>";

    ?>
</body>
</html>