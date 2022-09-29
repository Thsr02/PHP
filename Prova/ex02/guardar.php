<?php
session_start();
    if(isset($_POST['txtcor'])){
        $_SESSION['cor']=$_POST['txtcor'];
    }
    header("Refresh: 1, poema.php");
?>