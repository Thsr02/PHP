<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tela de Login</title>
</head>
<body>
    <?php
    session_start();
    ?>
    <div class="tela-login">
        <h1>Login</h1>
        <form action="checkLogin.php" method="post">    
            <input type="text" name="email" id="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <br><br>
            <input type="submit" value="Enviar" class="inputSubmit" name="submit">
        </form>
            
    </div>
</body>
</html>