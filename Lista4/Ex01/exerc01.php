<?php
session_start();

if(isset($_SESSION['nome'])){
    echo "<p>Seja Bem Vindo ".$_SESSION['nome'].", esperamos que goste do site!";
}


?>