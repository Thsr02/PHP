<?php
session_start();
if (!isset($_SESSION['email']) == true and (!isset($_SESSION['password']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('location: ../index.html');

}else{

    include "../../Login/connection.php";
    $regSelect_id = $_GET['regSelect_id'];
    $reg_userId = $_SESSION['id'];
    $reg_name = filter_input(INPUT_POST, 'reg_name', FILTER_DEFAULT);

    $sqlUpdate = $connection->prepare("UPDATE tbl_region SET reg_name=:reg_name WHERE reg_id = $regSelect_id AND reg_userId = $reg_userId AND reg_show = 0");

    $sqlUpdate->bindValue('reg_name', $reg_name);

   
    if($sqlUpdate->execute()){
           
        header('refresh: 1,../../page/gallery/regionGallery.php');
        // header('location:../page/home.php');
    }else{
        echo"Dados não Enviados";
        
    }

}



?>