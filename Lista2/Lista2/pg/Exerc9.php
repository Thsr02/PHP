<?php
$Frase = $_POST['txtFrase'];
$n1 = $_POST['num'];

    for($i = 0; $i < $n1; $i++){
        echo "{$Frase}<p>";
    }
    header("refresh: 10, Exerc9.html");
?>