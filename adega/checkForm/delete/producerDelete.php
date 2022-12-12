<?php
    session_start();
    if (!isset($_SESSION['email']) == true and (!isset($_SESSION['password']) == true)) {

        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('location: ../index.html');

} else {
    include "../../Login/connection.php";
    $prodSelect = $_GET['prodSelect'];

    try {
        $stmt = $connection->prepare("UPDATE tbl_producer SET prod_show = 1 WHERE prod_id = ? AND prod_userId = $_SESSION[id] ");
        $stmt->bindParam(1, $prodSelect);

        if ($stmt->execute()) {
            echo "<script>alert('Deletado com sucesso');</script>";
            header("refresh: 2 ../../page/gallery/producerGallery.php");
        }
    } catch (PDOException $erro) {
        echo "Erro na conexão" . $erro->getMessage();
    }
}