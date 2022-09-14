<?php
    session_start();

    if($_SESSION['login'] == 1){
        echo "Bem vindo ao sistema integrado";
        header("Refresh:5, index.php");
    }else{
        header("location: index.php");
    }

?>