<?php
    foreach($_POST['txtNome'] as $key => $value)
    {
        echo "{$key} : {$value}<p>";
    }
    foreach($_POST['txtEmail'] as $key => $value)
    {
        echo "{$key} : {$value}<p>";
    }
    foreach($_POST['txtCidade'] as $key => $value)
    {
        echo "{$key} : {$value}<p>";
    }
    header("Refresh: 5. Exerc07Index.php");
?>