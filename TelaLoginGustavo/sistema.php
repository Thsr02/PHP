<?php
session_start();
include "config.php";
if (!isset($_SESSION['email']) == true and (!isset($_SESSION['senha']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: index.php');
}
$logado = $_SESSION['email'];

$sql = "SELECT * FROM tbl_users ORDER BY id DESC";


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>SISTEMA | GN</title>
</head>
<style>
    body {
        background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        color: white;
        text-align: center;

    }
    .table-bg{
        background: rgba(0, 0, 0, 0.3);
        border-radius: 15px 15px 0 0;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg nav-dark bg-primary">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">SISTEMA DO GN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">SAIR</a>
        </div>
    </nav>
    <br>
    <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>";
        include "config.php";
        $sql = "SELECT * FROM tbl_users";
        $res = $connection->prepare($sql);
        $res->execute();
        ?>

    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">endereco</th>
                    <th scope="col">SENHA</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">TELEFONE</th>
                    <th scope="col">SEXO</th>
                    <th scope="col">DATA DE NASCIMENTO</th>
                    <th scope="col">CIDADE</th>
                    <th scope="col">ESTADO</th>
                    <th scope="col">ENDEREÇO</th>
                    <th scope="col">...</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <?php
                while($result = $res->fetch(PDO::FETCH_ASSOC)){
                $id = $result['id'];
                $nome = $result['nome'];
                $senha = $result['senha'];
                $email = $result['email'];
                $telefone = $result['telefone'];
                $genero = $result['sexo'];
                $data_nascimento = $result['data_nasc'];
                $cidade = $result['cidade'];
                $estado = $result['estado'];
                $endereco = $result['endereco'];
                

            ?>
            <tbody>
                <tr>
                    <td><?php echo $id?></td>
                    <td><?php echo $nome?></td>
                    <td><?php echo $senha?></td>
                    <td><?php echo $email?></td>
                    <td><?php echo $telefone?></td>
                    <td><?php echo $genero?></td>
                    <td><?php echo $data_nascimento?></td>
                    <td><?php echo $cidade?></td>
                    <td><?php echo $estado?></td>
                    <td><?php echo $endereco?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>