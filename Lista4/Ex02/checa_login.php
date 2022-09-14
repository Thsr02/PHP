<?php
    session_start();
        if($_SESSION['usuario']=="automacao" && $_SESSION['senha']=="turma1au"){
            $login = 1;
            $_SESSION['login']= $login;
        }else{
            $login = 0;
            $_SESSION['login']= $login;
        }

    header("location: principal.php");

?>