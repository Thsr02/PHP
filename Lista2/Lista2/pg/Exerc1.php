<?php 

$vl = $_POST['valor'];

if($vl >= 100){
    echo "Compra Maior ou igual a 100 reais";
}else{
    echo "Compra Menor que 100 Reis";
}


header("refresh: 10, Exerc1.html");



?>