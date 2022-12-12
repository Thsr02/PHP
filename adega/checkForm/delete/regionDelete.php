<?php
    session_start();
    if (!isset($_SESSION['email']) == true and (!isset($_SESSION['password']) == true)) {

        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('location: ../index.html');

} else {
    include "../../Login/connection.php";

    $regSelect_id = $_GET['regSelect_id'];

    try {
        $stmt = $connection->prepare("UPDATE tbl_region SET reg_show = 1 WHERE reg_id = ? AND reg_userId = $_SESSION[id] ");
        $stmt->bindParam(1, $regSelect_id);

        if ($stmt->execute()) {
            echo "<script>alert('Deletado com sucesso');</script>";
            header("refresh: 2 ../../page/gallery/regionGallery.php");
        }
    } catch (PDOException $erro) {
        echo "Erro na conexão" . $erro->getMessage();
    }
}