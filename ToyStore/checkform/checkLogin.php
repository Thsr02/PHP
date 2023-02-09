<?php

session_start();
    if($_POST){
        $email = $_POST['email'];
        $password = $_POST['password'];
        print_r($email);
        print_r($password);
        include "connection.php";
        
        try {
            $log = $connection->prepare("SELECT user_id, user_name FROM tbl_user WHERE (user_email, user_password) = (?,?);");
            $log->bindParam(1, $email);
            $log->bindParam(2, $password);
                if($log->execute()){
                    if($log->rowCount()>0){
                        if($result= $log->fetch(PDO::FETCH_ASSOC)){
                            $_SESSION['id'] = $result['user_id'];
                            $_SESSION['name'] = $result['user_name'];
                        }
                        $_SESSION['email'] = $email;
                        header("location: ../home.php");
                    }else{
                        unset($_SESSION['email']);
                        unset($_SESSION['password']);  
                        header("location: ../index.php");
                    }
                }
        }catch (PDOException $erro){
            echo "Erro na conexão: ".$erro->getMessage();
        }
    }
?>