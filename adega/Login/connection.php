<?php

try{
    $connection = new PDO("mysql:host=localhost; dbname=db_adega", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->exec("set names utf8");

}catch (PDOException $erro) {
    echo "Erro na conexão:" . $erro->getMessage();
}

?>