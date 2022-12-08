<?php
session_start();
if (!isset($_SESSION['email']) == true and (!isset($_SESSION['password']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('location: ../index.html');

}else{

        include "../Login/connection.php";
        $win_id = $_GET['win_id'];
        $wine_userId = $_SESSION['id'];
        $wine_name = filter_input(INPUT_POST, 'wineName', FILTER_DEFAULT);
        $wine_country = filter_input(INPUT_POST, 'wineCountry', FILTER_DEFAULT);
        $wine_year = filter_input(INPUT_POST, 'wineYear', FILTER_DEFAULT);
        $wine_literage = filter_input(INPUT_POST, 'literage', FILTER_DEFAULT);
        $wine_type = filter_input(INPUT_POST, 'wineType', FILTER_DEFAULT);
        $wine_grape = filter_input(INPUT_POST, 'grape', FILTER_DEFAULT);
        $wine_winery = filter_input(INPUT_POST, 'wineryName', FILTER_DEFAULT);
        $wine_classification = filter_input(INPUT_POST, 'wineClassification', FILTER_DEFAULT);
        $wine_content = filter_input(INPUT_POST, 'wineContent', FILTER_DEFAULT);
        $wine_producer = filter_input(INPUT_POST, 'wineProducer', FILTER_DEFAULT);


    $sqlUpdate = $connection->prepare("UPDATE tbl_wines SET vin_name=:wine_name, vin_country=:wine_country, vin_year=:wine_year, vin_literage=:wine_literage, vin_type=:wine_type, vin_grape=:wine_grape,
     vin_winery=:wine_winery, vin_classification=:wine_classification, vin_content=:wine_content, vin_producer=:wine_producer WHERE vin_id = $win_id AND vin_userId = $wine_userId" );

        $sqlUpdate->bindValue(':wine_name', $wine_name);
        $sqlUpdate->bindValue(':wine_country', $wine_country);
        $sqlUpdate->bindValue(':wine_year', $wine_year);
        $sqlUpdate->bindValue(':wine_literage', $wine_literage);
        $sqlUpdate->bindValue(':wine_type', $wine_type);
        $sqlUpdate->bindValue(':wine_grape', $wine_grape);
        $sqlUpdate->bindValue(':wine_winery', $wine_winery);
        $sqlUpdate->bindValue(':wine_classification', $wine_classification);
        $sqlUpdate->bindValue(':wine_content', $wine_content);
        $sqlUpdate->bindValue(':wine_producer', $wine_producer);

        if($sqlUpdate->execute()){
           
            header('refresh: 1,../page/gallery/wineGallery.php');
            // header('location:../page/home.php');
        }else{
            echo"Dados não Enviados";
            
        }

    }



?>