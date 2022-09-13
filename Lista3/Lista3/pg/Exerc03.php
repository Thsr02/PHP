<?php
$num =  array();
$maior = 0;
$div = 0;

    for($i=0;$i<5;$i++)
    {
        array_push($num, rand(1,50));
       $maior = max($num);
    }
        for($i=0;$i<5;$i++)
        {
            $div = $num[$i]/$maior;
            $div = number_format($div, 2, '.',"");
            echo $num[$i]." / {$maior} = $div<p>";
        }



?>