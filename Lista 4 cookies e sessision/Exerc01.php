<?php
session_start();

if(isset($_SESSION['nome'])){
    echo "Seja bem vindo, ".$_SESSION['nome']." espero que goste do site";
} 

header("Refresh : 5, indexExerc01.php");

?>
