<?php
session_start();
if (!isset($_SESSION['email']) == true and (!isset($_SESSION['password']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('location: ../index.html');

} else {
    include "../Login/connection.php";
    $userId = $_SESSION['id'];
    $search = filter_input(INPUT_GET, 'inputSearch', FILTER_DEFAULT);

    if (empty($_GET['inputSearch'])) {
        header('location: ../page/gallery/regionGallery.php');
    } else {
        $res = $connection->prepare('SELECT * FROM tbl_region WHERE reg_show = 0 AND reg_userId = :userId AND reg_name LIKE "%":inputSearch"%" ');
        $res->bindValue(':userId', $userId);
        $res->bindValue(':inputSearch', $search);
        $res->execute();
        if (!$res->rowCount() > 0) {
            echo "<script>alert('Região não cadastrada');</script>";
            header("refresh: 1 ../page/gallery/regionGallery.php");
        } else {
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styleGallery.css">

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

                <form class="d-flex" role="search" action="../checkForm/searchRegion.php" method="$_GET">
                    <input class="form-control me-2" type="search" name="inputSearch" placeholder="Pesquisar"
                        aria-label="Search">
                    <button class="btn btn-outline-success bg-dark" type="submit">Pesquisar</button>
                </form>

                <form class="btVoltar" action="../page/gallery/regionGallery.php">
                    <input class="submit-button" type="submit" value="Voltar">
                </form>
                <form class="btSair" action="exit.php">
                    <input class="submit-button" type="submit" value="Sair">
                </form>
            </div>
        </nav>
    </header>




    <section>

        <div class="container" style="border: #001142 solid 2px;">
            <div class="container text-center">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table align-middle" style="border: #06c142 solid 2px;">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Excluir</th>
                                </tr>
                            </thead>
                            <?php
    while ($result = $res->fetch(PDO::FETCH_ASSOC)) {
        $reg_id = $result['reg_id'];
        $reg_name = $result['reg_name'];
       
                            ?>
                            <tbody style="word-break: break-word;">
                                <tr>
                                    <td>
                                        <?php echo $reg_id ?>
                                    </td>
                                    <td>
                                        <?php echo $reg_name ?>
                                    </td>
                                  
                                    <td><button><a
                                                href="../page/register/edit/editRegisterRegion.php?regSelect_id=<?php echo $reg_id; ?>"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                </svg></a></button></td>

                                    <td><button><a href="delete/regionDelete.php?regSelect_id=<?php echo $reg_id; ?>"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                </svg><i class="bi bi-trash-fill"></i></a></button></td>

                                </tr>
                                <?php
    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>



    
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
        }
    }
}
?>