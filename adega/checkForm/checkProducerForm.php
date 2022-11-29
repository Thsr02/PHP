<?php
session_start();
    if(isset($_SESSION['id'])){
        include "../Login/connection.php";

        $prod_name = filter_input(INPUT_POST, 'prodName', FILTER_DEFAULT);
        $prod_region = filter_input(INPUT_POST, 'prodRegion', FILTER_DEFAULT);
        $prod_winery = filter_input(INPUT_POST, 'prodWineryName', FILTER_DEFAULT);
        $prod_tel = filter_input(INPUT_POST, 'prodTel', FILTER_DEFAULT);
        $prod_email = filter_input(INPUT_POST,'prodEmail',FILTER_DEFAULT);
        $user_id = $_SESSION['id'];

        $stmt = $connection->prepare("INSERT INTO tbl_producer(prod_name, prod_region, prod_winery, prod_tel, prod_email) 
        VALUES (:prodName, :prodRegion, :prodWineryName, :prodTel, :prodEmail);");

        $stmt->bindValue('prodName', $prod_name);
        $stmt->bindValue('prodRegion', $prod_region);
        $stmt->bindValue('prodWineryName', $prod_winery);
        $stmt->bindValue('prodTel', $prod_tel);
        $stmt->bindValue('prodEmail', $prod_email);

        if($stmt->execute()){
            echo"Dados enviados";
            header('location:../page/home.php');
    
        }else{
            echo"Dados não Enviados";
            
        }

    }else
    {
        header("location: ../index.php");
    }







?>