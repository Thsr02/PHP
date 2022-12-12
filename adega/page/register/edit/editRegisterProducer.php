<?php
session_start();
if (!isset($_SESSION['email']) == true and (!isset($_SESSION['password']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('location: ../../../index.html');

} else {

    include "../../../Login/connection.php";
    $prodSelect = $_GET['prodSelect'];
    $prod_userId = $_SESSION['id'];


    $sql = "SELECT * FROM tbl_producer WHERE prod_userId = $_SESSION[id] AND prod_id = $prodSelect AND prod_show = 0";
    $res = $connection->prepare($sql);
    $res->execute();

    while ($result = $res->fetch(PDO::FETCH_ASSOC)) {
        $prodSelect = $_GET['prodSelect'];
        $prod_id = $result['prod_id'];
        $prod_name = $result['prod_name'];
        $prod_tel = $result['prod_tel'];
        $prod_email = $result['prod_email'];
        $prod_region = $result['prod_name'];
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
    <title>Cadastro de produtor</title>
</head>

<body>

    <section class="form">
        <div class="container">
            <div class="form-image">
                <img src="../../../img/winery.svg" alt="">
            </div>
            <div class="form">
                <form action="../../../checkForm/editForm/formEditProducer.php?prodSelect=<?php echo $prod_id; ?>" method="post">
                    <div class="form-header">
                        <div class="title">
                            <h1>Cadastro de produtor</h1>
                        </div>
                    </div>
                    <div class="input-group">

                        <div class="input-box">
                            <label for="prodName">Nome</label>
                            <input type="text" name="prodName" id="prodName" value="<?php echo $prod_name?>" placeholder="Nome do produtor" required>
                        </div>

                        <div class="input-box">
                            <label for="prodTel">Telefone</label>
                            <input type="text" name="prodTel" id="prodTel" value="<?php echo $prod_tel?>" placeholder="(xx)-xxxxx-xxxx" required>
                        </div>

                        <div class="input-box">
                            <label for="prodEmail">Email</label>
                            <input type="email" name="prodEmail" id="prodEmail" value="<?php echo $prod_email?>" placeholder="digite seu imail" required>
                        </div>

                        <div class="input-box">
                            <label for="prodRegion">Região</label>
                            <select name="prodRegion" id="wineRegion" value="<?php echo $prod_region?>">
                            <?php
    session_start();
    include "../../../Login/connection.php";
    $sql = "SELECT reg_name, reg_id FROM tbl_region WHERE reg_userId = $_SESSION[id] AND reg_show = 0";
    $res = $connection->prepare($sql);
    $res->execute();
    while ($result = $res->fetch(PDO::FETCH_ASSOC)) {
        $reg_name = $result['reg_name'];
        $reg_id = $result['reg_id'];
                            ?>

                                    <option value="<?php echo $reg_id ?>"><?php echo $reg_name ?></option>
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
        <form action="../../gallery/producerGallery.php" method="post">
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