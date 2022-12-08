<?php
session_start();
include "../Login/connection.php";
if (!isset($_SESSION['email']) == true and (!isset($_SESSION['password']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('location: ../index.html');
  
}else{

    ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/styleGallery.css">
    <title>HomePage Adega</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg" id="navBar">
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
                        <a class="nav-link" href="../page/gallery/wineGallery.php">Vinhos</a>
                        <a class="nav-link" href="../page/gallery/producerGallery.php">Produtores</a>
                        <a class="nav-link" href="../page/gallery/regionGallery.php">Regiões</a>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Inserir Cadastros   
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark">
                                        <li><a class="dropdown-item" href="../page/register/registerWine.php">Cadastrar Vinhos</a></li>
                                        <li><a class="dropdown-item" href="../page/register/registerProducer.php">Cadastrar Produtor</a></li>
                                        <li><a class="dropdown-item" href="../page/register/registerRegion.php">Cadastrar Região</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <form class="register"action="../checkForm/exit.php">
                    <input class="submit-button" type="submit" value="Sair">
                </form>
            </div>
        </nav>
    </header>
    <p><h1><?php echo "Bem vindo ".$_SESSION['name']?></h1></p>
    <section class="carroseu">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="../img/vinho1.jpg" class="d-block w-100" alt="..." height="500" width="150">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../img/vinho2.jpg" class="d-block w-100" alt="..." height="500" width="150">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/vinho3.jpg" class="d-block w-100" alt="..." height="500" width="150">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
   


    <?php
}
?>

<script src="../js/bootstrap.bundle.min.js"></script>
    
</body>

</html>
