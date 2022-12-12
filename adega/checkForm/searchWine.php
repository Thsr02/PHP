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
        header('location: ../page/gallery/wineGallery.php');
    } else {
        $res = $connection->prepare('SELECT * FROM tbl_wines, tbl_producer WHERE vin_show = 0 AND vin_userId = :userId AND prod_id = vin_producer AND vin_name LIKE "%":inputSearch"%" ');
        $res->bindValue(':userId', $userId);
        $res->bindValue(':inputSearch', $search);
        $res->execute();
        if (!$res->rowCount() > 0) {
            echo "<script>alert('Nome de vinho não cadastrado');</script>";
            header("refresh: 1 ../page/gallery/wineGallery.php");
        } else {
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styleGallery.css">
    <title>Pesquisa</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg" id="navBar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../img/logo.wine.jpg" alt="" width="50" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                                        <li><a class="dropdown-item" href="../page/register/registerWine.php">Cadastrar
                                                Vinhos</a></li>
                                        <li><a class="dropdown-item" href="../page/register/registerProducer.php">Cadastrar
                                                Produtor</a></li>
                                        <li><a class="dropdown-item" href="../page/register/registerRegion.php">Cadastrar
                                                Região</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <form class="btVoltar" action="../page/gallery/wineGallery.php">
                    <input class="submit-button" type="submit" value="Voltar">
                </form>
                <form class="btSair" action="../checkForm/exit.php">
                    <input class="submit-button" type="submit" value="Sair">
                </form>

            </div>
        </nav>
    </header>
    <div class="container" style="border: #001142 solid 2px;">
        <div class="container text-center">
            <div class="row">
                <div class="table-responsive">
                    <table class="table align-middle" style="border: #06c142 solid 2px;">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Ano</th>
                                <th scope="col">Garrafa</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Pais</th>
                                <th scope="col">Produtor</th>
                                <th scope="col">Vinícola</th>
                                <th scope="col">Uva</th>
                                <th scope="col">Teor</th>
                                <th scope="col">Classificação</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Excluir</th>
                            </tr>
                        </thead>
                        <?php
            while ($result = $res->fetch(PDO::FETCH_ASSOC)) {
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

                                ?>
                        <tbody style="word-break: break-word;">
                            <tr>
                                <td>
                                    <?php echo $vin_id ?>
                                </td>
                                <td>
                                    <?php echo $vin_name ?>
                                </td>
                                <td>
                                    <?php echo $vin_year ?>
                                </td>
                                <td>
                                    <?php echo $vin_literage ?>
                                </td>
                                <td>
                                    <?php echo $vin_type ?>
                                </td>
                                <td>
                                    <?php echo $vin_country ?>
                                </td>
                                <td>
                                    <?php echo $vin_producer ?>
                                </td>
                                <td>
                                    <?php echo $vin_winery ?>
                                </td>
                                <td>
                                    <?php echo $vin_grape ?>
                                </td>
                                <td>
                                    <?php echo $vin_content ?>
                                </td>
                                <td>
                                    <?php echo $vin_classification ?>
                                </td>
                                <td><button><a href="../page/register/edit/editRegisterWine.php?win_id=<?php echo $vin_id; ?>"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                            </svg></a></button></td>

                                <td><button><a href="../checkForm/delete/wineDelete.php?win_id=<?php echo $vin_id; ?>"><svg
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
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
        }
    }
}
?>