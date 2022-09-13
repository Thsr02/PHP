<?php
$n1 = $_POST['num1'];

    if($n1 % 2 == 0){
        echo "Número digitado é par";
    }else{
        echo "Número digitado é impar";
    }

        header("refresh: 10, Exerc3.html");
?>