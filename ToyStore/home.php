
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ToyStore/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>HeloStoreToy</title>
</head>
<body>
<?php
session_start();
?>
   <div class="container">
    <nav class="navbar bg-body-tertiary">
        <div class="container justify-content-center">
          <a class="navbar-brand" href="#">
            <img src="../ToyStore/img/56647.jpg" alt="Logo" width="110" height="40" class="d-inline-block align-text-top">
            HeloStoreToy
          </a>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../ToyStore/page/blocos.php">Blocos</a></li>
              <li><a class="dropdown-item" href="../ToyStore/page/bonecas.php">Bonecas</a></li>
              <li><a class="dropdown-item" href="../ToyStore/page/carrinhos.php">Carrinhos</a></li>
              <li><a class="dropdown-item" href="../ToyStore/page/actionfigure.php">Action Figure</a></li>
              <li><a class="dropdown-item" href="../ToyStore/page/esportes.php">Esportes</a></li>
              <li><a class="dropdown-item" href="../ToyStore/page/jogos.php">Jogos</a></li>
            </ul>
          </div>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Oque você procura?" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Procurar</button>
          </form>
         <form action="../ToyStore/checkform/exit.php" method="post">
<button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Sair
  </button>
  </form>
  
        </div>
      </nav>
      <br><br>
      <div class="jumbotron">
        <div class="row">
          <div class="card-deck--custom">
            <div class="card-custom col-md-2 text-center">
              <div>
                <img class="card-img-top" src="img/card1.jpg" height="180"/>
                <div class="card-body">
                  <a
                  data-toggle="collapse"
                  href="../ToyStore/page/blocos.php"
                  aria-expanded="false"
                  aria-controls="collapseExample"
                  >Blocos</a>
                </div>
              </div>
            </div>
    
            <div class="card-custom col-md-2 text-center">
              <div>
                <img class="card-img-top" src="img/card2.jpg" height="180" />
                <div class="card-body">
                  <a
                  data-toggle="collapse"
                  href="../ToyStore/page/bonecas.php"
                  aria-expanded="false"
                  aria-controls="collapseExample"
                  >Bonecas</a>
                </div>
              </div>
            </div>
    
            <div class="card-custom col-md-2 text-center">
              <div>
                <img
                  class="card-img-top"
                  src="img/card3.jpg" height="180"/>
                <div class="card-body">
                  <a
                  data-toggle="collapse"
                  href="../ToyStore/page/carrinhos.php"
                  aria-expanded="false"
                  aria-controls="collapseExample"
                  >Carrinhos</a>
                </div>
              </div>
            </div>
    
            <div class="card-custom col-md-2 text-center">
              <div>
                <img class="card-img-top" src="img/card4.jpg" height="180"/>
                <div class="card-body">
               <a
                  data-toggle="collapse"
                  href="../ToyStore/page/actionfigure.php"
                  aria-expanded="false"
                  aria-controls="collapseExample"
                  >Action Figure</a>
                </div>
              </div>
            </div>
    
            <div class="card-custom col-md-2 text-center">
              <div>
                <img class="card-img-top" src="img/card5.jpg" height="180"/>
                <div class="card-body">
                <a
                  data-toggle="collapse"
                  href="../ToyStore/page/esportes.php"
                  aria-expanded="false"
                  aria-controls="collapseExample"
                  >Esportes</a>
                </div>
              </div>
            </div>
            
            <div class="card-custom col-md-2 text-center">
              <div>
                <img
                  class="card-img-top"
                  src="img/card6.jpg" height="180"/>
                <div class="card-body">
              <a
                  data-toggle="collapse"
                  href="../ToyStore/page/jogos.php"
                  aria-expanded="false"
                  aria-controls="collapseExample"
                  >Jogos</a>
                </div>
              </div>
            </div>
            <div class="card-custom col-md-2 text-center">
              <div>
                <img
                  class="card-img-top"
                  src="img/card7.jpg" height="180"/>
                <div class="card-body">
              <a
                  data-toggle="collapse"
                  href="../ToyStore/registerPage/registerProducer.php"
                  aria-expanded="false"
                  aria-controls="collapseExample"
                  >Cadastrar Produto</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      

</div>  

    <script src="../ToyStore/js/bootstrap.bundle.min.js"></script>

</div>  </body>
</html>