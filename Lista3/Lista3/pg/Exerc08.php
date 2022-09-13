<?php
$valores = array('0','10','3','1','7','55','15','21','99');

    foreach($valores as $key=>$value)
    {
        if($value %2 == 0)
        {
            echo "{$value}<p>";
        }
    }


?>