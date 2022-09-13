<?php
$num1 = array();
$menor = 0;

    for($i=0;$i<40;$i++)
    {
        array_push($num1, rand(1,50));
        echo $num1[$i]."<p>";
    }
    $menor = min($num1);
        echo "Menor Número encontrado foi: {$menor}<p>";


?>