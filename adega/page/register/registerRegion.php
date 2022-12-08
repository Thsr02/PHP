 <?php
        session_start();
        if (!isset($_SESSION['email']) == true and (!isset($_SESSION['password']) == true)) {

            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('location: ../index.html');

 } else {


 ?>
    
    
    
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styleFormulario.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>Cadastro de região</title>
</head>
<body>
   
        <!-- <header>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                <a class="navbar-brand" href="#">
                            <img src="../img/logo.wine.jpg" alt="" width="50" height="50">
                        </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" aria-current="page" href="../page/home.php">Home</a>
                            <a class="nav-link" href="../pg/vinhos.php">Vinhos</a>
                            <a class="nav-link" href="../pg/regiao.php">Regiões</a>
                            <a class="nav-link" href="../pg/produtor.php">Protudores</a>
                        </div>
                    </div>
                    <form class="register"action="../index.html">
                        <input class="submit-button" type="submit" value="Sair">
                    </form>
                </div>
            </nav>
        </header> -->
        <section class="form">
            <div class="container">
                <div class="form-image">
                    <img src="../../img/winery.svg" alt="" >
                </div>
                <div class="form">
                <form action="../../checkForm/checkRegionForm.php" method="post">
                        <div class="form-header">
                            <div class="title">
                                <h1>Cadastro de Região</h1>
                            </div>
                        </div>
                    <div class="input-group">

                        <div class="input-box">
                            <label for="reg_name">Região</label>
                            <input type="text" name="reg_name" id="reg_name" placeholder="Nome da região" required>
                        </div>

                        
                    </div>
                        <div class="form-header">
                            <div class="register-button">
                                <input id="inpb" type="submit" value="Enviar">
                            </div>
                        </div>
                </form>
                </div>    
            </div>
                        <form action="../home.php" method="post">
                            <div class="form-header">
                                <div class="register-button">
                                    <input id="inpb" type="submit" value="Voltar">
                                </div>
                            </div>
                        </form>
        </section>
        <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
 }
 ?>