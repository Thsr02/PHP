<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 6</title>
</head>
<body>
    <head>
        <h1>Quem derrotou Jiraya Sensei</h1>
    </head>
        <section>
            <form action="" method="post">
                <fieldset>
                    <div>
                    <input type="radio" name="txtres" id=""value = 0><label for="">MADARA</label><p>
                    <input type="radio" name="txtres" id=""value = 1><label for="">ORICHIMARU</label><p>
                    <input type="radio" name="txtres" id=""value = 2><label for="">PAIN</label><p>
                    <input type="radio" name="txtres" id=""value = 3><label for="">NARUTO</label><p>
                    </div>
                </fieldset>
                <button type="submit">SALVAR RESPOSTA</button>
            </form>
        </section>
        <?php
            session_start();
            if(isset($_POST['txtres'])){
                $_SESSION['resposta6']=$_POST['txtres'];
                echo "<a href=\"pag7.php\"><button>PROXIMA QUESTÃO</button></a>";
            }
        
        ?>

</body>
</html>