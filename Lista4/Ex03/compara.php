<?php
session_start();
if($_SESSION['altura'] > $_SESSION['altura1']){
    echo $_SESSION['nome']." É o Mais Alto<p>";
}else{
    echo $_SESSION['nome1']." É o Mais Alto<p>";
}

if($_SESSION['idade'] > $_SESSION['idade1']){
    echo $_SESSION['nome']." É o Mais Velho<p>";
}else{
    echo $_SESSION['nome1']." É o Mais Velho<p>";
}

if($_SESSION['peso'] > $_SESSION['peso1']){
    echo $_SESSION['nome']." É o Mais Pesado<p>";
}else{
    echo $_SESSION['nome1']." É o Mais Pesado<p>";
}

//header("Refresh: 8, indexFormulario1.php");
?>