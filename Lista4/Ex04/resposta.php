<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <head>
        <h1>Resultado</h1>
    </head>
    <?php
        session_start();
        $contador = 0;
        
            switch ($_SESSION['resposta1']) {
                case 0:
                    $contador++;
                    break;
            }
            switch ($_SESSION['resposta2']) {
                case 1:
                    $contador++;
                    break;
            }
            switch ($_SESSION['resposta3']) {
                case 3:
                    $contador++;
                    break;
            }
            switch ($_SESSION['resposta4']) {
                case 2:
                    $contador++;
                    break;
            }
            switch ($_SESSION['resposta5']) {
                case 3:
                    $contador++;
                    break;
            }
            switch ($_SESSION['resposta6']) {
                case 2:
                    $contador++;
                    break;
            }
            switch ($_SESSION['resposta7']) {
                case 3:
                    $contador++;
                    break;
            }
            switch ($_SESSION['resposta8']) {
                case 1:
                    $contador++;
                    break;
            }
            switch ($_SESSION['resposta9']) {
                case 3:
                    $contador++;
                    break;
            }
            switch ($_SESSION['resposta10']) {
                case 3:
                    $contador++;
                    break;
            }
            echo $_SESSION['nome']." Você Acertou o total de ".$contador." Resposta";
    ?>
</body>
</html>