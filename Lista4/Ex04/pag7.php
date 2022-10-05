<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 7</title>
</head>
<body>
    <head>
        <h1>Qual nome do Demonio da nevoa</h1>
    </head>
        <section>
            <form action="" method="post">
                <fieldset>
                    <div>
                    <input type="radio" name="txtres" id=""value = 0><label for="">HIDAN</label><p>
                    <input type="radio" name="txtres" id=""value = 1><label for="">OROCHIMARU</label><p>
                    <input type="radio" name="txtres" id=""value = 2><label for="">MAKOTO SHISHIO</label><p>
                    <input type="radio" name="txtres" id=""value = 3><label for="">ZABUZA</label><p>
                    </div>
                </fieldset>
                <button type="submit">SALVAR RESPOSTA</button>
            </form>
        </section>
        <?php
            session_start();
            if(isset($_POST['txtres'])){
                $_SESSION['resposta7']=$_POST['txtres'];
                echo "<a href=\"pag8.php\"><button>PROXIMA QUESTÃO</button></a>";
            }
        
        ?>

</body>
</html>