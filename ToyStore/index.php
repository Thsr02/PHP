
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
   <div class="container ">
    <nav class="navbar bg-body-tertiary ">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="../ToyStore/img/56647.jpg" alt="Logo" width="110" height="40" class="d-inline-block align-text-top">
            HeloStoreToy
          </a>
<button type="button" class="btn btn-primary justify-content-end" data-bs-toggle="modal" data-bs-target="#exampleModal" >
    Login
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5  justify-content-center" id="exampleModalLabel">Login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
        <form action="../ToyStore/checkform/checkLogin.php" method="post">
          <input type="text" name="email" id="email" placeholder="Usuário"><br><br>
          <input type="password" name="password" id="password" placeholder="Senha">
        </div>
        <div class="modal-footer">
       
          
          <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Entrar</button>
        </form>
          
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          
          <a href="../ToyStore/registro.php" class="btn btn-primary">Ainda não é cadastrado?</a>
        </div>
      </div>
    </div>
  </div>
        </div>
      </nav>
      <br><br>
     
      

</div>  

    <script src="../ToyStore/js/bootstrap.bundle.min.js"></script>

</div>  </body>
</html>