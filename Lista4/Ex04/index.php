<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
    <head>
        <h1>SUPER QUIZ</h1>
    </head>
    <section>
        <form action="" method="post">
            <section>
                <fieldset>
                    <label for="">NOME </label><input type="text" name="txtname" id="">
                    <button type="submit">SALVAR</button> <button type="reset">LIMPAR</button>
                </fieldset>
            </section>
        </form>
    </section>
        <?php
            if(isset($_POST['txtname'])){
                $_SESSION['nome'] = $_POST['txtname'];

              echo "<p><a href=\"pag1.php\">INICIAR<button></a>";  
            }

        
        ?>
</body>
</html>