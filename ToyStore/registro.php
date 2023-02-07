<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleCadastrar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>HeloStoreToy</title>
</head>
<body>
    
                <div class="login-card-container">
                    <div class="login-card">
                            <div class="login-card-logo">
                                <img src="img/bebida.png" alt="">
                            </div>
                        <div class="login-card-header">
                            <h1>Cadastro<br>HeloStoreToy</h1>

                        </div>

                    <form class="login-card-form" action="checkform/saveRegister.php" method="post">

                        <div class="form-item">
                            <span class="form-item-icon material-symbols-rounded">Person</span>
                            <input type="text" placeholder="Entre com seu nome" name="name" required autofocus>
                        </div>

                        <div class="form-item">
                            <span class="form-item-icon material-symbols-rounded">mail</span>
                            <input type="text" placeholder="Entre com Email" name="email" required >
                        </div>
                        
                        <div class="form-item">
                            <span class="form-item-icon material-symbols-rounded">lock</span>
                            <input type="password" placeholder="Senha" name="pass1" required>
                        </div>
                        <div class="form-item">
                            <span class="form-item-icon material-symbols-rounded">lock</span>
                            <input type="password" placeholder="Confirmar senha" name="pass2" required>
                        <?php
                        session_start();
                        if(isset($_SESSION['erro'])){
                            echo "<p class='erro'>Senhas não coicidem</p>";
                            echo "<style>
                                    p.erro{
                                            color: red;
                                            font-size: 8pt;
                                            margin-left: 20px;
                                          }
                                  </style>";

                        }
                        session_destroy();

                        ?>
                    </div>
                    
                        <input type="submit" value="Cadastrar">
                            </form>
                </div>
            </div>
</body>
</html>