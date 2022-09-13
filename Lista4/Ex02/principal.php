<?php
    session_start();

    if(isset($_SESSION['login'])==1){
        echo "Bem vindo ao sistema integrado";
    }else{
        echo "Usuario ou senha incorreto";
        header("location: index.php");
    }

?>