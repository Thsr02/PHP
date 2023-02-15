<?php
session_start();
if (!isset($_SESSION['email']) == true and (!isset($_SESSION['password']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('location: ../index.html');

}else{
        include "../checkform/connection.php";

        $bri_name = filter_input(INPUT_POST, 'bri_name', FILTER_DEFAULT);
        $bri_cat = filter_input(INPUT_POST, 'cat_id', FILTER_DEFAULT);
        $userId = $_SESSION['id'];
        $extensao = strtolower(substr($_FILES['bri_img']['name'], -4));//Captura e Extensão do arquivo
        $nome_img = strtolower(substr($_FILES['bri_img']['name'], 0, -4));//Captura o nome sem extensão
        $bri_img = $nome_img .'-' .date('YmdHis') .$extensao; //Cria um novo nome
        //Faz o upload da imagem para a pasta img - bri_img é o name do campo no formulario
        move_uploaded_file($_FILES['bri_img']['tmp_name'], '../img/' . $bri_img);

    // print_r("CATEGORIA ".$bri_cat." ");
    // print_r("NOME ".$bri_name." ");
    // print_r("ID USER ".$userId." ");

    $stmt = $connection->prepare("INSERT INTO tbl_brinquedo(bri_name, bri_cat, bri_img, bri_userId) 
    VALUES (:bri_name,  :cat_id, :bri_img, :userId );");

    $stmt->bindValue('userId', $userId);
    $stmt->bindValue('bri_name', $bri_name);
    $stmt->bindValue('bri_img', $bri_img);
    $stmt->bindValue('cat_id', $bri_cat);
  
       

        if($stmt->execute   ()){
            echo"Dados enviados";
            header('location:../home.php');
    
        }else{
            echo"Dados não Enviados";
            
        }

    }