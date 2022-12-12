<?php
session_start();
if (!isset($_SESSION['email']) == true and (!isset($_SESSION['password']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('location: ../index.html');

}else{
            include "../Login/connection.php";

            $reg_userId = $_SESSION['id'];
            $reg_name = filter_input(INPUT_POST, 'reg_name', FILTER_DEFAULT);
            

            $stmt = $connection->prepare("INSERT INTO tbl_region(reg_name, reg_userId) VALUES (:reg_name, :reg_userId);");

            $stmt->bindValue('reg_userId', $reg_userId);
            $stmt->bindValue('reg_name', $reg_name);

            if($stmt->execute()){
                echo"Dados enviados";
                header('location:../page/gallery/regionGallery.php');
            }else{
                echo"Dados não Enviados";
                
            }

   
    }





?>