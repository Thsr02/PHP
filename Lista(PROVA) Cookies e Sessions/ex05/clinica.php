<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica Medica</title>
</head>
<body>
    <head>
        <h1>Clinica Medica</h1>
    </head>
            <section>
                <fieldset>
                    <div>
                        <form action="clinica.php" method="get">
                            <label for="">Adicionar Pacientes  </label><input type="text" name="txtpaciente" id="txtpaciente">
                            <input type="submit" value="Salvar">
                        </form>
                    </div>
                </fieldset>
            </section>
            <?php
                session_start();
                  $listaPacientes = array();
                        if(isset($_GET['txtpaciente'])){
                                $_SESSION['listapaciente'][] = $_GET['txtpaciente'];
                        }
                            if(isset($_SESSION['listapaciente'])){
                                $listaPacientes = $_SESSION['listapaciente'];
                            }else{
                                $listaPacientes = array();
                            }
                ?>
                        <table>
                            <br>
                            <tr><strong>Lista Pacientes do dia</strong></tr>
                            <ol>
                                <?php foreach ($listaPacientes as $pacientes)echo "<li>".$pacientes."<p>";?>
                            </ol>    
                        </table>
</body>
</html>