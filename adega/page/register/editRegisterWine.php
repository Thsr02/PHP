<?php
session_start();
if (!isset($_SESSION['email']) == true and (!isset($_SESSION['password']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('location: ../../index.html');

} else {

    include "../../Login/connection.php";
       $win_id = $_GET['win_id'];
       $sql = "SELECT * FROM tbl_wines, tbl_producer WHERE prod_id = vin_producer AND vin_userId = $_SESSION[id] AND vin_id = $win_id";
       $res = $connection->prepare($sql);
       $res->execute();

    while ($result = $res->fetch(PDO::FETCH_ASSOC)) {
        $win_id = $_GET['win_id'];
        $vin_id = $result['vin_id'];
        $vin_name = $result['vin_name'];
        $vin_year = $result['vin_year'];
        $vin_literage = $result['vin_literage'];
        $vin_type = $result['vin_type'];
        $vin_country = $result['vin_country'];
        $vin_producer = $result['prod_name'];
        $vin_winery = $result['vin_winery'];
        $vin_grape = $result['vin_grape'];
        $vin_content = $result['vin_content'];
        $vin_classification = $result['vin_classification'];

    }
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/styleFormulario.css">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <title>Cadastro de vinhos</title>
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
                        <div class="navbar-nav"
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
                    <img src="../../img/winery.svg" alt="">
                </div>
                <div class="form">
                    <form action="../../checkForm/edit.php?win_id=<?php echo $vin_id;?>" method="post">
                        <div class="form-header">
                            <div class="title">
                                <h1>Cadastre seu vinho</h1>
                            </div>
                        </div>
                        <div class="input-group">
    
                            <div class="input-box">
                                <label for="wineName">Nome</label>
                                <input type="text" name="wineName" id="wineName" value="<?php echo $vin_name?>" placeholder="Nome do vinho" required>
                            </div>
    
                            <div class="input-box">
                                <label for="wineCountry">País de origem</label>
                                <input type="text" name="wineCountry" id="wineCountry " value="<?php echo $vin_country?>"  placeholder="País de origem" required>
                            </div>
    
                            <div class="input-box">
                                <label for="wineYear">Ano de Fabricação</label>
                                <input type="number" name="wineYear" id="wineYear" value="<?php echo $vin_year?>" placeholder="Ano de fabricação" required>
                            </div>
    
                            <div class="input-box">
                                <label for="literage">Litragem da garrafa</label>
                                <input type="number" name="literage" id="literage" value="<?php echo $vin_literage?>"placeholder="Litragem Ex: 750ml" required>
                            </div>
    
                            <div class="input-box">
                                <label for="wineType">Tipo</label>
                                <input type="text" name="wineType" id="wineType" value="<?php echo $vin_type?>"placeholder="Ex: Tinto, Rose, Branco" required>
                            </div>
    
                            <div class="input-box">
                                <label for="grape">Uva</label>
                                <input type="text" name="grape" id="grape" value="<?php echo $vin_grape?>"placeholder="Uva usada" required>
                            </div>
    
                            <div class="input-box">
                                <label for="wineryName">Vinícola</label>
                                <input type="text" name="wineryName" id="wineryName"value="<?php echo $vin_winery?>" placeholder="Nome da vinícola" required>
                            </div>
    
                            <div class="input-box">
                                <label for="wineClassification">Classificação do vinho</label>
                                <input type="text" name="wineClassification" id="wineClassification" value="<?php echo $vin_classification?>" placeholder="Ex: Seco, suave" required>
                            </div>
    
                            <div class="input-box">
                                <label for="wineContent">Teor alcoólico</label>
                                <input type="number" name="wineContent" id="wineContent" value="<?php echo $vin_content?>"placeholder="Teor alcoólico" required>
                            </div>
                            
                            <div class="input-box">
                                <label for="wineProd">Produtor</label>
                                <select name="wineProducer" id="WineProducer">
                                    <?php
                                    session_start();
                                    include "../../Login/connection.php";
                                    $sql = "SELECT prod_name, prod_id FROM tbl_producer  WHERE prod_userId =  $_SESSION[id];";
                                    $res = $connection->prepare($sql);
                                    $res->execute();
    
                                    while ($result = $res->fetch(PDO::FETCH_ASSOC)) {
                                        $prod_name = $result['prod_name'];
                                        $prod_id = $result['prod_id'];
                                    ?>
                                        <option value="<?php echo $prod_id ?>"><?php echo $prod_name ?></option>
                                    <?php
                                    }
                                    ?>
    
                                </select>
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
            <form action="../page/wineGallery.php" method="post">
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








<?php
}
?>