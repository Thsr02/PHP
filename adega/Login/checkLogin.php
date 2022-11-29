<?php

session_start();
    if($_POST){
        $email = $_POST['email'];
        $password = $_POST['password'];
        

        include "connection.php";
        
        try {
            $log = $connection->prepare("SELECT user_id FROM tbl_user WHERE (user_email, user_password) = (?,?);");
            $log->bindParam(1, $email);
            $log->bindParam(2, $password);
                if($log->execute()){
                    if($log->rowCount()>0){
                        if($result= $log->fetch(PDO::FETCH_ASSOC)){
                            $_SESSION['id'] = $result['user_id'];
                        }
                        $_SESSION['email'] = $email;
                        header("location: ../page/home.php");
                    }else{
                        $_SESSION['erro'] = $_POST['password'];
                        header("location: /adega/index.html");
                    }
                }
        }catch (PDOException $erro){
            echo "Erro na conexão: ".$erro->getMessage();
        }
    }
?>