<?php
session_start();
   
if(isset($_POST['txtres'])){
    $_SESSION['res'] = $_POST['txtres'];
   
    echo "Obrigado pela participação";
    header("refresh: 3, enquete.php");
}else{
    header("location: enquete.php");
}
    
   
?>