<?php
$num =  array();
$menor = 0;
$ind = 0;
$valor = 0;

    for($i=0;$i<5;$i++)
    {
        array_push($num, rand(0,10));
    }
        foreach($num as $ind=>$valor)
        {
            echo "<p>Indice = {$ind}, Valor = {$valor}<p>";
        }
  $menor = min($num);
  $ind = array_search($menor, $num);
  echo "Menor número encontrado: {$menor} Localizado no Indice: {$ind}<p>";  
       

?>