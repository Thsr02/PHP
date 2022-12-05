<?php
session_start();
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    print_r($email);
    print_r($senha);

    include "config.php";

    try{
        $log = $connection->prepare("SELECT id FROM tbl_users WHERE(email, senha) = (?,?);");
        $log->bindParam(1, $email);
        $log->bindParam(2, $senha);
        if ($log->execute()) {
            if ($log->rowCount() > 0) {
                if ($result = $log->fetch(PDO::FETCH_ASSOC)) {
                    $_SESSION['id'] = $result['id'];
                }
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                header("location: sistema.php");
            } else {
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                header("location: index.php");
            }
        }
    }catch (PDOException $erro){
        echo "Erro na conexão: ".$erro->getMessage();
    }


}

?>