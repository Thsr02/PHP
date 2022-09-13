<?php
$Vr = $_POST['raiz'];
$CalRaiz = sqrt($Vr);
$CalRaiz = number_format($CalRaiz, 2,'.',""); 
        echo "O Valor da raiz de: {$Vr} é {$CalRaiz}<p>";
    for($i = 0; $i < 20; $i++){
        $Vr++;
        $CalRaiz = sqrt($Vr); 
        $CalRaiz = number_format($CalRaiz, 2,'.',""); 
            echo "O Valor da raiz de: {$Vr} é {$CalRaiz}<p>";
    }

    header("refresh: 10, Exerc8.html");
?>