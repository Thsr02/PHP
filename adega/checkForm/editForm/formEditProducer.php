<?php
session_start();
if (!isset($_SESSION['email']) == true and (!isset($_SESSION['password']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('location: ../index.html');

}else{
    include "../../Login/connection.php";
    $prodSelect = $_GET['prodSelect'];
    $prod_userId = $_SESSION['id'];
    $prod_name = filter_input(INPUT_POST, 'prodName', FILTER_DEFAULT);
    $prod_region = filter_input(INPUT_POST, 'prodRegion', FILTER_DEFAULT);
    $prod_tel = filter_input(INPUT_POST, 'prodTel', FILTER_DEFAULT);
    $prod_email = filter_input(INPUT_POST,'prodEmail',FILTER_DEFAULT);

    $sqlUpdate = $connection->prepare("UPDATE tbl_producer SET prod_name=:prod_name, prod_region=:prod_region, prod_tel=:prod_tel, prod_email=:prod_email
     WHERE prod_id = $prodSelect AND prod_userId = $prod_userId AND prod_show = 0");

    $sqlUpdate->bindValue(':prod_name', $prod_name);
    $sqlUpdate->bindValue(':prod_region', $prod_region);
    $sqlUpdate->bindValue(':prod_tel', $prod_tel);
    $sqlUpdate->bindValue(':prod_email', $prod_email);

    if($sqlUpdate->execute()){
       
        header('refresh: 1,../../page/gallery/producerGallery.php');
        // header('location:../page/home.php');
    }else{
        echo"Dados não Enviados";
        
    }

}



?>