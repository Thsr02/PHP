<?php
$n1 = $_POST['nota1'];
$n2 = $_POST['nota2'];
$media = ($n1 + $n2) / 2;

    if($media >= 8){
        echo "Média {$media} Aluno aprovado";
    }else if($media <= 3){
        echo "Média {$media} Aluno reprovado";
    }else{
        echo "Média {$media} Aluno em Recuperação";
    }

    header("refresh: 10, Exerc5.html");


?>