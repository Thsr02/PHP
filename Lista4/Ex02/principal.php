<?php
    session_start();

    if($_SESSION['login']==1){
        echo "Bem vindo ao sistema integrado";
    }else{
        header("location: index.php");
    }

?>