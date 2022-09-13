<?php
$name = $_POST['txtName'];
$valor = $_POST['Invest'];
$tipo = $_POST['InvesTipo'];
$meses = $_POST['QtdMes'];
$total = 0;
$mostrarMes = 0;

    switch($tipo){
        case 1 : 
            for($i = $meses; $i > 0; $i--){
                $total =$valor + ($valor * 0.5 / 100);
                $mostrarMes++;
                $total = number_format($total, 2, '.',"");
                echo "{$name} Investimento tipo 1 Poupança, Valor investido R$ {$valor}, total de mêses do investimento {$meses}, Mês:  
                {$mostrarMes}, Retornara o total de R$ {$total}<p>";
                $valor = $total;
               
            }
            
        
        break;
        case 2 : for($i = $meses; $i > 0; $i--){
            $total =$valor + ($valor * 1 / 100);
            $mostrarMes++;
            $total = number_format($total, 2, '.',"");
            echo "{$name} Investimento tipo 2 Renda Fixa, Valor investido R$ {$valor}, total de mêses do investimento {$meses}, Mês:  
            {$mostrarMes}, Retornara o total de R$ {$total}<p>";
            $valor = $total;
        }
        break; 
        default: 
            echo "Tipo de investimento invalido, entre com 1 p/ Poupança e 2 p/ Renda Fixa";
        break;

    }
       




?>