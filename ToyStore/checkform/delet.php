<?php
    session_start();
    if (!isset($_SESSION['email']) == true and (!isset($_SESSION['password']) == true)) {

        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('location: ../index.html');
    
    }else{
        include "../checkform/connection.php";
        $bri_id = $_GET['bri_id'];

   


   try{
       $stmt = $connection->prepare("UPDATE tbl_brinquedo SET bri_show = 1 WHERE bri_id = ? AND bri_userId = $_SESSION[id] ");
       $stmt->bindParam(1, $bri_id);
       
           if($stmt->execute()){
               echo "<script>alert('Deletado com sucesso');</script>";
                   header("refresh: 1 /ToyStore/home.php");
           }
   }catch(PDOException $erro){
       echo "Erro na conexão" . $erro->getMessage();
   }
    
}



?>