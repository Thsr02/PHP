<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
    <label for="">Nome:</label><p>
    <label for="">Apelido</label><p>
    <label for="">Departamento</label>
    <select name="Departamentos" id="">
        <?php
            $nome = ['Departamento de Contabilidade','Departamento de Informatica','Departamento de Limpeza','Departamento de Recursos Humanos','Departamento de Segurança',];
            for($i=0;$i<5;$i++){
                echo "<option>$nome[$i]</option>";
            }
        
        ?>
    </select>
</body>
</html>