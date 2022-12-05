<?php
session_start();
        if (isset($_POST['submit'])) {
                    include "config.php";

                    $nome = $_POST['nome'];
                    $senha = $_POST['senha'];
                    $email = $_POST['email'];
                    $telefone = $_POST['telefone'];
                    $genero = $_POST['genero'];
                    $data_nasc = $_POST['data_nascimento'];
                    $cidade = $_POST['cidade'];
                    $estado = $_POST['estado'];
                    $endereco = $_POST['endereco'];

                    $stmt = $connection->prepare("INSERT INTO tbl_users(nome, email, senha, telefone, sexo, data_nasc, cidade, estado, endereco) 
                    VALUE(:nome, :email, :senha, :telefone, :genero, :data_nascimento, :cidade, :estado, :endereco);");

                    $stmt->bindValue('nome', $nome);
                    $stmt->bindValue('senha', $senha);
                    $stmt->bindValue('email', $email);
                    $stmt->bindValue('telefone', $telefone);
                    $stmt->bindValue('genero', $genero);
                    $stmt->bindValue('data_nascimento', $data_nasc);
                    $stmt->bindValue('cidade', $cidade);
                    $stmt->bindValue('estado', $estado);
                    $stmt->bindValue('endereco', $endereco);

                    if ($stmt->execute()) {
                        echo "Dados enviados";
                        header('location:index.php');

                    } else {
                        echo "Dados não Enviados";

                    }

        } else {
            header("location: index.html");
        }
?>