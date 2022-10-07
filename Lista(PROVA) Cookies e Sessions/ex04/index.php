<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <head>
        <h1>Lista de tarefas</h1>
    </head>
            <section>
                <fieldset>
                    <form action="index.php" method="post">
                        <label for="">Usuário </label><input type="text" name="txtuser" id="" required><p>
                        <label for="">Senha   </label><input type="password" name="txtsenha" id="" required><p>
                        <input type="submit" value="Login">
                    </form>
                </fieldset>
            </section>
        <?php
        $_SESSION['usuario'] = 'user123';
        $_SESSION['senha'] = 'senha123';
        if(isset($_POST['txtuser']) && isset($_POST['txtsenha'])){
            if($_POST['txtuser']==$_SESSION['usuario'] && $_POST['txtsenha']==$_SESSION['senha']){
                header('Location: tarefa.php');
            }
        }
        ?>
            
        
</body>
</html>