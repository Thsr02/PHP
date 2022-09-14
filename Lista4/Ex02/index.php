<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    
            <form action="" method="post">
                <fieldset>
                    <legend>Login senha em session</legend>
                        <label for="">Usuário </label><input type="text" name="txtusuario" id="" required><p>
                        <label for="">Senha</label><input type="password" name="txtsenha" id="" required><p>
                        <button type="submit">Salvar Usuário</button> <button type="reset">Limpar</button>
                </fieldset>
            </form>

            <?php
                session_start();

                if (isset($_POST['txtusuario']) && $_POST['txtsenha']) {
                    
                    $_SESSION['usuario'] = $_POST['txtusuario'];
            
                    $_SESSION['senha'] = $_POST['txtsenha'];
                
                    echo "<p><a href=\"checa_login.php\">LOGIN</a>";
                }
        
        ?>
</body>
</html>