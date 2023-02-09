<?php
session_start();
if (!isset($_SESSION['email']) == true and (!isset($_SESSION['password']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('location: ../index.html');

}else{
        include "../checkform/connection.php";

        $bri_name = filter_input(INPUT_POST, 'bri_name', FILTER_DEFAULT);
        $bri_cat = filter_input(INPUT_POST, 'cat_id', FILTER_DEFAULT);
        $userId = $_SESSION['id'];

    print_r("CATEGORIA ".$bri_cat." ");
    print_r("NOME ".$bri_name." ");
    print_r("ID USER ".$userId." ");

    $stmt = $connection->prepare("INSERT INTO tbl_brinquedo(bri_name, bri_cat, bri_userId) 
    VALUES (:bri_name,  :cat_id, :userId );");

    $stmt->bindValue('userId', $userId);
    $stmt->bindValue('bri_name', $bri_name);
    $stmt->bindValue('cat_id', $bri_cat);
  
       

        if($stmt->execute   ()){
            echo"Dados enviados";
            header('location:../home.php');
    
        }else{
            echo"Dados não Enviados";
            
        }

    }