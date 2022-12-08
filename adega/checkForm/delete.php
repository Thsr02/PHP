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
       $stmt = $connection->prepare("UPDATE tbl_wines SET vin_show = 1 WHERE vin_id = ? AND vin_userId = $_SESSION[id] ");
       $stmt->bindParam(1, $win_id);
       
           if($stmt->execute()){
               echo "<script>alert('Deletado com sucesso');</script>";
                   header("refresh: 2 ../page/gallery/wineGallery.php");
           }
   }catch(PDOException $erro){
       echo "Erro na conexão" . $erro->getMessage();
   }
    
}



?>