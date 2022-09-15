<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
        <form action="" method="post">
            <fieldset>
                <legend>FORMULARIO 1</legend>
                <label for="">NOME </label><input type="text" name="txtnome" id="" required><p>
                <label for="">IDADE </label><input type="number" name="txtidade" id="" required><p>
                <label for="">PESO </label><input type="number" name="txtpeso" id="" required><p>
                <label for="">ALTURA</label><input type="number" name="txtaltura" id="" required><p>
                <button type="submit">SALVAR</button> <button type="reset">LIMPAR</button>
            </fieldset>
        </form>
        <?php
            session_start();
                if(isset($_POST['txtnome']) && $_POST['txtidade'] && $_POST['txtpeso'] && $_POST['txtaltura']){
                    $_SESSION['nome']=$_POST['txtnome'];
                    $_SESSION['idade']=$_POST['txtidade'];
                    $_SESSION['peso']=$_POST['txtpeso'];
                    $_SESSION['altura']=$_POST['txtaltura'];

                    echo "<p><a href=\"indexFormulario2.php\">SALVAR</a>";    
                }

        
        ?>
</body>
</html>