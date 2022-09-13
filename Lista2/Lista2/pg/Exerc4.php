<?php
$sn = $_POST['senha'];
$us = $_POST['usu'];

$usuario1 = "unesp";
$senhausu1 = "cotec";

    if($sn == $senhausu1 && $us == $usuario1){
        echo "Bem vindo ao Sistema de ativação";
    }else{
        echo "Usuário ou senha inválidos!!, tente novamente";
    }

    header("refresh: 10, Exerc4.html");

?>