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
                <label for="">NOME </label><input type="text" name="txtnome1" id="" required><p>
                <label for="">IDADE </label><input type="number" name="txtidade1" id="" required><p>
                <label for="">PESO </label><input type="number" name="txtpeso1" id="" required><p>
                <label for="">ALTURA</label><input type="number" name="txtaltura1" id="" required><p>
                <button type="submit">SALVAR</button> <button type="reset">LIMPAR</button>
            </fieldset>
        </form>
        <?php
            session_start();
                if(isset($_POST['txtnome1']) && $_POST['txtidade1'] && $_POST['txtpeso1'] && $_POST['txtaltura1']){
                    $_SESSION['nome1']=$_POST['txtnome1'];
                    $_SESSION['idade1']=$_POST['txtidade1'];
                    $_SESSION['peso1']=$_POST['txtpeso1'];
                    $_SESSION['altura1']=$_POST['txtaltura1'];

                    echo "<p><a href=\"compara.php\">SALVAR</a>";    
                }

        
        ?>
</body>
</html>