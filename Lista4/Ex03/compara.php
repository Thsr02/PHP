<?php
session_start();
if($_SESSION['altura'] > $_SESSION['altura1']){
    echo $_SESSION['nome']." É o Mais Alto";
}else{
    echo $_SESSION['nome1']." É o Mais Alto";
}

if($_SESSION['idade'] > $_SESSION['idade1']){
    echo $_SESSION['nome']." É o Mais Velho";
}else{
    echo $_SESSION['nome1']." É o Mais Velho";
}

if($_SESSION['peso'] > $_SESSION['peso1']){
    echo $_SESSION['nome']." É o Mais Pesado";
}else{
    echo $_SESSION['nome1']." É o Mais Pesado";
}

//header("Refresh: 8, indexFormulario1.php");
?>