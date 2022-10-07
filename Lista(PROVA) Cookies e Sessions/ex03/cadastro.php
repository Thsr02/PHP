<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <head>
        <h1>Digite seus Dados</h1>
    </head>
    <?php
      session_start();
        if(isset($_POST['txtnome']) && $_POST['txtsexo'] && $_POST['txtcity'] && $_POST['txtsenha1'] && $_POST['txtsenha2']){
            $_SESSION['nome'] = $_POST['txtnome'];
            $_SESSION['sexo'] = $_POST['txtsexo'];
            $_SESSION['cidade'] = $_POST['txtcity'];
            $_SESSION['senha1'] = $_POST['txtsenha1'];
            $_SESSION['senha2'] = $_POST['txtsenha2'];

                if($_SESSION['senha1'] != $_SESSION['senha2']){
                    echo "<body><h2>As senhas digitadas estão diferentes</h2> 
                        <style>
                            h2{
                                color : red;
                        } </style>
                        </body>";
                    session_destroy();
                }else{
                    echo "<body>
                               <h2>Dados cadastrados com sucesso</h2>
                                    <style>
                                        h2{
                                            color: green;
                                        }
                                    </style> 
                          </body>";
                    session_destroy();
                }

        }
    ?>
    <section>
        <fieldset>
            <form action="cadastro.php" method="post">
                <div>
                    <label for=""><strong>Nome:</strong></label><input type="text" name="txtnome" id="txtnome"
                    value="<?php if(isset($_SESSION['nome']) && $_SESSION['senha1'] != $_SESSION['senha2']){
                        echo $_SESSION['nome'] ;}?>" placeholder=" Entre com seu nome" required>
                <?php 
                    echo "<strong><p>Sexo<p>";
                if(isset($_SESSION['sexo'])&& $_SESSION['senha1'] != $_SESSION['senha2']){     
                        if($_SESSION['sexo'] == 1){
                            echo "<input type='radio' name='txtsexo' value='1' checked>  <label for=''>Masculino</label>
                            <input type='radio' name='txtsexo' value='2'>  <label for=''>Feminino</label>";
                        }else{
                            echo "<input type='radio' name='txtsexo' value='1'>  <label for=''>Masculino</label>
                            <input type='radio' name='txtsexo' value='2' checked>  <label for=''>Feminino</label>";
                        }
                    }else{
                        echo "<input type='radio' name='txtsexo' value='1' checked>  <label for=''>Masculino</label>
                            <input type='radio' name='txtsexo' value='2'>  <label for=''>Feminino</label>";   
                    }
                ?>        
                    <p><strong> Cidade</strong></p>
                    <select name="txtcity" id="" required>
                        <?php
                            if(isset($_SESSION['cidade']) && $_SESSION['senha1'] != $_SESSION['senha2']){
                                if($_SESSION['cidade'] == 1){
                                    echo "<option value='1'>Guaratingueta</option>
                                <option value='2'>Lorena</option>
                                <option value='3'>Aparecida</option>
                                <option value='4'>Pindamonhangaba</option>";
                                }else if($_SESSION['cidade'] == 2){
                                    echo "<option value='2'>Lorena</option>
                                    <option value='1'>Guaratingueta</option>
                                    <option value='3'>Aparecida</option>
                                    <option value='4'>Pindamonhangaba</option>";
                                }else if($_SESSION['cidade'] == 3){
                                    echo "<option value='3'>Aparecida</option>
                                    <option value='2'>Lorena</option>
                                    <option value='1'>Guaratingueta</option>
                                    <option value='4'>Pindamonhangaba</option>";
                                }else{
                                    echo "<option value='3'>Aparecida</option>
                                    <option value='2'>Lorena</option>
                                    <option value='1'>Guaratingueta</option>
                                    <option value='4'>Pindamonhangaba</option>";
                                }
                            }else{
                                echo "<option value='1'>Guaratingueta</option>
                                <option value='2'>Lorena</option>
                                <option value='3'>Aparecida</option>
                                <option value='4'>Pindamonhangaba</option>";
                            }
                        ?>
                    </select>
                    
                    <p>
                        <strong> LOGIN:</strong>
                    <p> 
                        <input type="password" name="txtsenha1" id="txtsenha1" placeholder="Digite sua senha" required>
                    <p>
                        <input type="password" name="txtsenha2" id="txtsenha2" placeholder="Confirme a senha" required>
                    <p>
                        <input type="submit" value="Cadastrar">

                </div>
            </form>
        </fieldset>
    </section>
</body>

</html>