<?php
$num1 = array();
$num2 = array();
$soma = array();

    for($i=0;$i<10;$i++)
        {
            array_push($num1, rand(1,100));
            array_push($num2, rand(1,100));
            array_push($soma, $num1[$i] + $num2[$i]);

                echo $num1[$i]." + ".$num2[$i]." = ".$soma[$i]."<p>";
        }



?>