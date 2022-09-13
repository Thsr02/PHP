<?php
$name = $_POST['txtNome'];
$sex = $_POST['Sexo'];
$peso = $_POST['numPeso'];
$alt = $_POST['numAlt'];
$PI = 0;
switch($sex){
    case 'Feminino';
    $PI = pow($alt, 2) * 22;
    break;
    case 'Masculino';
    $PI = pow($alt, 2) * 23;
    break;
}
    if($peso < $PI){
        echo "{$name} Peso ideal {$PI} <span style=color:yellow>Abaixo do peso ideal</span>";
    }elseif($peso > $PI){
        echo "{$name} Peso Ideal {$PI} <span style=color:red>Acima do peso ideal</span>";    
    }else{
        echo "{$name} Peso Ideal {$PI} <span style=color:blue>Dentro do peso ideal</span>";
    }

    header("refresh: 10, Exerc6.html");


?>