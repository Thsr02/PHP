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
    <link rel="stylesheet" href="../css/styleFormulario.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Cadastro de produtor</title>
</head>
<body>
   
        <section class="form">
            <div class="container">
                <div class="form-image">
                    <img src="../img/56647.jpg" alt="" >
                </div>
                <div class="form">
                <form action="../checkForm/checkToyForm.php" method="post">
                        <div class="form-header">
                            <div class="title">
                                <h1>Cadastrar Brinquedo</h1>
                            </div>
                        </div>
                    <div class="input-group">

                        <div class="input-box">
                            <label for="bri_name">Brinquedo</label>
                            <input type="text" name="bri_name" id="bri_name" placeholder="Nome do Brinquedo" required>
                        </div>
                        <div class="input-box">
                            <label for="cat_id">Categoria</label>
                            <select name="cat_id" id="cat_id">
                            <?php
    session_start();
    include "../checkform/connection.php    ";
    $sql = "SELECT cat_name, cat_id FROM tbl_categoria";
    $res = $connection->prepare($sql);
    $res->execute();
    while ($result = $res->fetch(PDO::FETCH_ASSOC)) {
        $cat_name = $result['cat_name'];
        $cat_id = $result['cat_id'];
                            ?>

                                    <option value="<?php echo $cat_id ?>"><?php echo $cat_name ?></option>
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
        <form action="../home.php" method="post">
            <div class="form-header">
                <div class="register-button">
                    <input id="inpb" type="submit" value="Voltar">
                </div>
            </div>
        </form>
        </section>
    <script src="/toyStore/js/bootstrap.min.js"></script>
</body>
</html>
<?php
 }
 ?>