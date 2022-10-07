<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tarefas</title>
</head>
<body>
    <head>
        <h1>Lista de Tarefas</h1>
    </head>
        <section>
            <fieldset>
                <form action="tarefa.php" method="get">
                    <label for="">Incluir nova tarefa na lista:</label><p><input type="text" name="txtlista" id="txtlista">
                    <input type="submit" value="CADASTRAR">
                </form>
            </fieldset>
        </section>
    <?php
    session_start();
    $listaTarefa = array();
        if(isset($_GET['txtlista'])){
                $_SESSION['listatarefa'][] = $_GET['txtlista'];
        }
            if(isset($_SESSION['listatarefa'])){
                $listaTarefa = $_SESSION['listatarefa'];
            }else{
                $listaTarefa = array();
            }
    ?>
            <table>
                <h1>Tarefas</h1>
                <ol>
                    <?php foreach ($listaTarefa as $tarefa)echo "<li>".$tarefa."<p>";?>
                </ol>    
            </table>
</body>
</html>