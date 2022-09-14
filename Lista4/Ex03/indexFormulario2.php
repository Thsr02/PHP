<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 2</title>
</head>
<body>
<form action="" method="post">
            <fieldset>
                <legend>FORMULARIO 2</legend>
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
                    $_SESSION['nome1']=$_POST['txtnome'];
                    $_SESSION['idade1']=$_POST['txtidade'];
                    $_SESSION['peso1']=$_POST['txtpeso'];
                    $_SESSION['altura1']=$_POST['txtaltura'];

                    echo "<p><a href=\"compara.php\">SALVAR</a>";    
                }

        
        ?>
</body>
</html>