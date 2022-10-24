<?php

session_start();
    if($_POST){
        $email = $_POST['email'];
        $senha = $_POST['senha1'];
        

        include "conexao.php";

        try {
            $log = $conexao->prepare("SELECT * FROM tbl_usuario WHERE (usu_email, usu_senha) = (?,?);");
            $log->bindParam(1, $email);
            $log->bindParam(2, $senha);
                if($log->execute()){
                    if($log->rowCount()>0){
                        header("location: /MeuSimHTML/pg/tela1.php");
                    }else{
                        $_SESSION['erro'] = $_POST['senha1'];
                        header("location: /MeuSimHTML/index.html");
                    }
                }
        }catch (PDOException $erro){
            echo "Erro na conexão: ".$erro->getMessage();
        }
    }
?>