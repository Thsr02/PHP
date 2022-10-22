<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleCadastrar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>Login ÉMeuSim</title>
</head>
<body>
    
            <div class="login-card-container">
                <div class="login-card">
                        <div class="login-card-logo">
                            <img src="img/bebida.png" alt="">
                        </div>
                    <div class="login-card-header">
                        <h1>Cadastro<br>ÉMeuSim</h1>

                    </div>
                            <form class="login-card-form" action="salvarCadastro.php" method="post">
                    <div class="form-item">
                        <span class="form-item-icon material-symbols-rounded">mail</span>
                        <input type="text" placeholder="Entre com Email" name="email" required autofocus>
                    </div>
                    <br>
                    <div class="form-item">
                        <span class="form-item-icon material-symbols-rounded">lock</span>
                        <input type="password" placeholder="Senha" name="senha1" required>
                    </div>
                    <div class="form-item">
                        <span class="form-item-icon material-symbols-rounded">lock</span>
                        <input type="password" placeholder="Confirmar senha" name="senha2" required>
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
                    <div class="login-card-footer">
                        Não tem um email? <a href="https://accounts.google.com/signup" target="_blank">Criar conta Google</a>
                    </div>
                </div>
            </div>
</body>
</html>