<?php
$n1 = $_POST['num1'];

    if($n1 >= 0){
        echo "<span style=color:blue>Número Positivo</span>";
    }else{
        echo "<span style=color:red>Número Negativo</span>";
    }

    header("refresh: 10, Exerc2.html");
?>