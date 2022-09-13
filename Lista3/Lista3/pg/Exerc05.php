<?php
$produtos = array('PC'=>'3500.00','Monitor'=>'1000.00',
                'Teclado'=>'89.90','Mouse'=>'89.90','Cadeira'=>'40.00');
$inf50 = 0;
$valor = 0;
$imedia = 0;
$media = 0;
$valormedia = 0;
        foreach($produtos as $key=>$valor)
        {
            echo "{$key} = {$valor}<p>";
                if($valor<50)
                {
                    $inf50++;
                }      
        }
            foreach($produtos as $key=>$valor)
            {
                if($valor>=50 && $valor<=100){
                    echo "Produtos com valor entre 50 a 100 Reais: {$key} = {$valor}<p>";
                }
                if($valor>=100)
                {
                    $imedia++;
                    $media = $media + $valor;
                }
            }
            $valormedia = $media / $imedia;
            $valormedia = number_format($valormedia,2);
        echo "Media de Preços produtos acima de 100 Reais; {$valormedia}<p>";
        echo "Produtos abaixo de R$50.00 = {$inf50}<p>";      
?>