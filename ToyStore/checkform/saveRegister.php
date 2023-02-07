<?php
    session_start();
    if($_POST){
        if($_POST['pass1'] == $_POST['pass2']){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];

        include "connection.php";

        try {
            $stmt = $connection->prepare("INSERT INTO tbl_user(user_name, user_email, user_password) VALUES (?,?, ?);");
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $email);
            $stmt->bindParam(3, $pass1);
                if($stmt->execute()){
                    if($stmt->rowCount()>0){
                        header("refresh: 1, ../index.html");
                    }else{
                        echo "ERRO: Não foi possivel executar a declaração sql";
                    }
                }else{
                    echo "Erro na execução do cadastro";
                }
        }catch (PDOException $erro){
            echo "Erro na conexão: ".$erro->getMessage();
        }
    
    }else{
        $_SESSION['erro'] = $_POST['pass1'];
        header("location: ../registro.php");
    }

    }

?>