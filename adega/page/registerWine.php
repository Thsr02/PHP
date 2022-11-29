<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleFormulario.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Cadastro de vinhos</title>
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
                <form action="../checkForm/checkWineForm.php" method="post">
                        <div class="form-header">
                            <div class="title">
                                <h1>Cadastre seu vinho</h1>
                            </div>
                        </div>
                    <div class="input-group">

                        <div class="input-box">
                            <label for="wineName">Nome</label>
                            <input type="text" name="wineName" id="wineName" placeholder="Nome do vinho" required>
                        </div>

                        <div class="input-box">
                            <label for="wineCountry">País de origem</label>
                            <input type="text" name="wineCountry" id="wineCountry" placeholder="País de origem" required>
                        </div>

                        <div class="input-box">
                            <label for="wineRegion">Região</label>
                            <input type="text" name="wineRegion" id="wineRegion" placeholder="Região" required>
                        </div>

                        <div class="input-box">
                            <label for="wineYear">Ano de Fabricação</label>
                            <input type="text" name="wineCountry" id="wineCountry" placeholder="Ano de fabricação" required>
                        </div>

                        <div class="input-box">
                            <label for="literage">Litragem da garrafa</label>
                            <input type="text" name="literage" id="literage" placeholder="Litragem Ex: 750ml" required>
                        </div>

                        <div class="input-box">
                            <label for="wineType">Tipo</label>
                            <input type="text" name="wineType" id="wineType" placeholder="Ex: Tinto, Rose, Branco" required>
                        </div>

                        <div class="input-box">
                            <label for="grape">Uva</label>
                            <input type="text" name="grape" id="grape" placeholder="Uva usada" required>
                        </div>

                        <div class="input-box">
                            <label for="wineryName">Vinícola</label>
                            <input type="text" name="wineryName" id="wineryName" placeholder="Nome da vinícola" required>
                        </div>

                        <div class="input-box">
                            <label for="wineClassification">Classificação do vinho</label>
                            <input type="text" name="wineClassification" id="wineClassification" placeholder="Ex: Seco, suave" required>
                        </div>

                        <div class="input-box">
                            <label for="wineContent">Teor alcoólico</label>
                            <input type="text" name="wineContent" id="wineContent" placeholder="Teor alcoólico" required>
                        </div>

                        <div class="input-box">
                            <label for="timeGuard">Tempo de guarda</label>
                            <input type="text" name="timeGuard" id="timeGuard" placeholder="Ex: 5 anos" required>
                        </div>

                        <div class="input-box">
                            <label for="wineTemp">Temperatura</label>
                            <input type="text" name="wineTemp" id="wineTemp" placeholder="Temperatura 16ºC" required>
                        </div>

                        <div class="input-box">
                            <label for="wineHarmonization">Harmonização</label>
                            <textarea name="wineHarmonization" id="wineHarmonization" cols="35" rows="3" placeholder="Descreva a harmonização do vinho"></textarea>
                        </div>

                        <div class="input-box">
                            <label for="wineDescription">Descrição do vinho</label>
                            <textarea name="wineDescription" id="wineDescription" cols="35" rows="3" placeholder="Descrição do vinho"></textarea>
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