<?php
    session_start();
    if (!isset($_SESSION['email']) == true and (!isset($_SESSION['password']) == true)) {

        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('location: ../index.html');
    
    }else{
        include "../Login/connection.php";
        $win_id = $_GET['win_id'];

   


   try{
       $stmt = $connection->prepare("DELETE FROM tbl_wines WHERE vin_id = ? AND vin_userId = ? ");
       $stmt->bindParam(1, $win_id);
       $stmt->bindParam(2, $_SESSION['id']);
           if($stmt->execute()){
               echo "<script>alert('Deletado com sucesso');</script>";
                   header("refresh: 2 ../page/wineGallery.php");
           }
   }catch(PDOException $erro){
       echo "Erro na conexão" . $erro->getMessage();
   }
    
}



?>