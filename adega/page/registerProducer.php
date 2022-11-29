<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleFormulario.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Cadastro de produtor</title>
</head>
<body>
    <?php
        session_start();
    ?>
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
                    <img src="../img/winery.svg" alt="" >
                </div>
                <div class="form">
                <form action="../checkForm/checkProducerForm.php" method="post">
                        <div class="form-header">
                            <div class="title">
                                <h1>Cadastro de produtor</h1>
                            </div>
                        </div>
                    <div class="input-group">

                        <div class="input-box">
                            <label for="prodName">Nome</label>
                            <input type="text" name="prodName" id="prodName" placeholder="Nome do produtor" required>
                        </div>

                        <div class="input-box">
                            <label for="prodRegion">Região</label>
                            <input type="text" name="prodRegion" id="prodRegion" placeholder="Região" required>
                        </div>

                        <div class="input-box">
                            <label for="prodWineryName">Vinícola</label>
                            <input type="text" name="prodWineryName" id="prodWineryName" placeholder="Nome da vinícola" required>
                        </div>

                        <div class="input-box">
                            <label for="prodTel">Telefone</label>
                            <input type="text" name="prodTel" id="prodTel" placeholder="(xx)-xxxxx-xxxx" required>
                        </div>

                        <div class="input-box">
                            <label for="prodEmail">Email</label>
                            <input type="email" name="prodEmail" id="prodEmail" placeholder="digite seu imail" required>
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
                        <form action="../page/home.php" method="post">
                            <div class="form-header">
                                <div class="register-button">
                                    <input id="inpb" type="submit" value="Voltar">
                                </div>
                            </div>
                        </form>
        </section>
    <script src="/adega_thiago/js/bootstrap.min.js"></script>
</body>
</html>