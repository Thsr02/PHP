<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 10</title>
</head>
<body>
    <head>
        <h1>Qual é o melhor personagem de anime, de todos os tempos</h1>
    </head>
        <section>
            <form action="" method="post">
                <fieldset>
                    <div>
                    <input type="radio" name="txtres" id=""value = 0><label for="">SAMURAI X</label><p>
                    <input type="radio" name="txtres" id=""value = 1><label for="">BATTOUSAI O RETALHADOR</label><p>
                    <input type="radio" name="txtres" id=""value = 2><label for="">KENSHIN HIMURA</label><p>
                    <input type="radio" name="txtres" id=""value = 3><label for="">TODAS AS ALTERNATIVAS ESTÃO CORRETAS</label><p>
                    </div>
                </fieldset>
                <button type="submit">SALVAR RESPOSTA</button>
            </form>
        </section>
        <?php
            session_start();
            if(isset($_POST['txtres'])){
                $_SESSION['resposta10']=$_POST['txtres'];
                echo "<a href=\"resposta.php\"><button>PROXIMA QUESTÃO</button></a>";
            }
        
        ?>

</body>
</html>