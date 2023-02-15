

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>HeloStoreToy</title>
</head>

<body>
    <?php
    session_start();
    ?>
    <div class="container">
        <nav class="navbar bg-body-tertiary">
            <div class="container justify-content-center">
                <a class="navbar-brand" href="../home.php">
                    <img src="../img/56647.jpg" alt="Logo" width="110" height="40" class="d-inline-block align-text-top">
                    HeloStoreToy
                </a>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../page/galeria.php">Galeria</a></li>
                        <li><a class="dropdown-item" href="../page/blocos.php">Blocos</a></li>
                        <li><a class="dropdown-item" href="../page/bonecas.php">Bonecas</a></li>
                        <li><a class="dropdown-item" href="../page/carrinhos.php">Carrinhos</a></li>
                        <li><a class="dropdown-item" href="../page/esportes.php">Esportes</a></li>
                        <li><a class="dropdown-item" href="../page/jogos.php">Jogos</a></li>
                    </ul>
                </div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Oque você procura?" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Procurar</button>
                </form>
                <form action="../home.php" method="post">
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Voltar
                    </button>
                </form><form action="../ToyStore/checkform/exit.php" method="post">
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Sair
                    </button>
                </form>

                <h1>Galeria de brinquedos</h1>
            </div>
        </nav>
        <br><br>
        <?php

        include "../checkform/connection.php";
        $sql = "SELECT * FROM tbl_brinquedo WHERE bri_userId = $_SESSION[id] AND bri_show = 0 AND bri_cat = 4";
        $res = $connection->prepare($sql);
        $res->execute();

        while ($result = $res->fetch(PDO::FETCH_ASSOC)) {
            $bri_id = $result['bri_id'];
            $bri_name = $result['bri_name'];
            $bri_img = $result['bri_img'];

        ?>


            <div class="jumbotron">
                <div class="row">
                    <div class="card-deck--custom">
                        <div class="card-custom col-md-2 text-center">

                            <div>
                                <img class="card-img-top" src="../img/<?php echo $bri_img; ?>" height="180" />
                                <div class="card-body">
                                    <?php echo $bri_name; ?><br>
                                    <button><a href="../register/edit/editRegisterRegion.php?regSelect_id=<?php echo $reg_id; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                            </svg></a></button></td>

                                    <td><button><a href="../checkForm//Delet.php?bri_id=<?php echo $bri_id; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                </svg><i class="bi bi-trash-fill"></i></a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

    </div>

    <script src="../js/bootstrap.bundle.min.js"></script>

    </div>
</body>

</html>
