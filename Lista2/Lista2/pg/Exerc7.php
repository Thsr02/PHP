<?php
$F = $_POST['Fah'];

    for($cont = 0; $cont <=10; $cont++){
        
        $C = 5/9 * ($F - 32);
            $C = number_format($C, 2, '.',"");
            echo "Valor em Fahrenheit: {$F} Valor em Celsius(C): {$C}<p>";
        $F++;


    }
    header("refresh: 10, Exerc7.html");
?>