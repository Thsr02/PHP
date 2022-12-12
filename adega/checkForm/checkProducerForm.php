<?php
session_start();if (!isset($_SESSION['email']) == true and (!isset($_SESSION['password']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('location: ../index.html');

}else{
        include "../Login/connection.php";

        $prod_name = filter_input(INPUT_POST, 'prodName', FILTER_DEFAULT);
        $prod_region = filter_input(INPUT_POST, 'prodRegion', FILTER_DEFAULT);
        $prod_tel = filter_input(INPUT_POST, 'prodTel', FILTER_DEFAULT);
        $prod_email = filter_input(INPUT_POST,'prodEmail',FILTER_DEFAULT);
        $prod_userId = $_SESSION['id'];

        $stmt = $connection->prepare("INSERT INTO tbl_producer(prod_name, prod_region, prod_tel, prod_email, prod_userId) 
        VALUES (:prodName, :prodRegion, :prodTel, :prodEmail, :prod_userId);");

        $stmt->bindValue('prod_userId', $prod_userId);
        $stmt->bindValue('prodName', $prod_name);
        $stmt->bindValue('prodRegion', $prod_region);
        $stmt->bindValue('prodTel', $prod_tel);
        $stmt->bindValue('prodEmail', $prod_email);

        if($stmt->execute()){
            echo"Dados enviados";
            header('location:../page/gallery/producerGallery.php');
    
        }else{
            echo"Dados não Enviados";
            
        }

    }







?>