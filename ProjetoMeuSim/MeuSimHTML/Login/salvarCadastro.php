<?php
    session_start();
    if($_POST){
        if($_POST['senha1'] == $_POST['senha2']){
        $email = $_POST['email'];
        $senha1 = $_POST['senha1'];
        $senha2 = $_POST['senha2'];

        include "conexao.php";

        try {
            $stmt = $conexao->prepare("INSERT INTO tbl_usuario(usu_email, usu_senha) VALUES (?,?);");
            $stmt->bindParam(1, $email);
            $stmt->bindParam(2, $senha1);
                if($stmt->execute()){
                    if($stmt->rowCount()>0){
                        echo "Cadastro realizado com sucesso!";
                        header("refresh: 3, ../index.html");
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
        $_SESSION['erro'] = $_POST['senha1'];
        header("location: /MeuSimHTML/Login/cadastar.php");
    }

    }

?>