<?php
session_start();
if (!isset($_SESSION['email']) == true and (!isset($_SESSION['password']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('location: ../../../index.html');

} else {

    include "../../../Login/connection.php";
        $regSelect_id = $_GET['regSelect_id'];
        $sql = "SELECT * FROM tbl_region WHERE reg_userId = $_SESSION[id] AND reg_id = $regSelect_id AND reg_show = 0";
        $res = $connection->prepare($sql);
        $res->execute();

                while ($result = $res->fetch(PDO::FETCH_ASSOC)) {
                    $regSelect_id = $_GET['regSelect_id'];
                    $reg_id = $result['reg_id'];
                    $reg_name = $result['reg_name'];
                }
        ?>

  
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/styleFormulario.css">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <title>Cadastro de região</title>
</head>
<body>

        <section class="form">
            <div class="container">
                <div class="form-image">
                    <img src="../../../img/winery.svg" alt="" >
                </div>
                <div class="form">
                <form action="../../../checkForm/editForm/formEditRegion.php?regSelect_id=<?php echo $reg_id; ?>" method="post">
                        <div class="form-header">
                            <div class="title">
                                <h1>Cadastro de Região</h1>
                            </div>
                        </div>
                    <div class="input-group">

                        <div class="input-box">
                            <label for="reg_name">Região</label>
                            <input type="text" name="reg_name" id="reg_name" value="<?php echo $reg_name?>" placeholder="Nome da região" required>
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
                        <form action="../../gallery/regionGallery.php" method="post">
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