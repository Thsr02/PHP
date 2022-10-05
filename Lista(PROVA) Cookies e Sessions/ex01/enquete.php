<?php
session_start();
$resposta;
if(isset($_SESSION['res'])){   
    switch ($_SESSION['res']) {
        case '1':
            $resposta = 'ABC';
            break;
        case '2':
            $resposta = 'Americana';
            break;
        case '3':
            $resposta = 'Alecrim';
            break;
        case '4':
            $resposta = 'Baraúnas';
            break;
        case '5':
            $resposta = 'Globo';
            break;
        case '6':
            $resposta = 'Potiguar';
            break;
        case '7':
            $resposta = 'Outro';
            break;   
        default:
            echo "Escolha uma das Opções";
            break;
    }
    echo"<h1>Para qual time do futebol potiguar você torce?</h1>";
    echo "<h1>Você Respondeu ".$resposta."</h1>";
    echo "<strong>Obrigado pela participação</strong><p>";
    header('Refresh: 4, enquete.php');
session_destroy();
}else{
?>
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    
        <fieldset>
            <form action="resposta.php" method="post">
                <h1>Para qual time do futebol potiguar você torce?</h1>
                <label for="">ABC</label> <input type="radio" name="txtres" id="" value= "1"> <p>
                <label for="">América</label> <input type="radio" name="txtres" id="" value="2"><p>
                <label for="">Alecrim</label> <input type="radio" name="txtres" id="" value="3"><p>
                <label for="">Baraúnas</label> <input type="radio" name="txtres" id="" value="4"><p>
                <label for="">Globo</label> <input type="radio" name="txtres" id="" value="5"><p>
                <label for="">Potiguar</label> <input type="radio" name="txtres" id="" value="6"><p>
                <label for="">Outro</label> <input type="radio" name="txtres" id="" value="7"><p>

                <input type="submit"></input>
            </form>
        </fieldset>
    
</body>
</html>
<?php
}