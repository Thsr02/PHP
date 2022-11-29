<?php
session_start();
    if(isset($_SESSION['id'])){
        include "../Login/connection.php";

        $wine_name = filter_input(INPUT_POST, 'wineName', FILTER_DEFAULT);
        $wine_country = filter_input(INPUT_POST, 'wineCountry', FILTER_DEFAULT);
        $wine_region = filter_input(INPUT_POST, 'wineRegion', FILTER_DEFAULT);
        $wine_year = filter_input(INPUT_POST, 'wineYear', FILTER_DEFAULT);
        $wine_literage = filter_input(INPUT_POST, 'literage', FILTER_DEFAULT);
        $wine_type = filter_input(INPUT_POST, 'wineType', FILTER_DEFAULT);
        $wine_grape = filter_input(INPUT_POST, 'grape', FILTER_DEFAULT);
        $wine_winery = filter_input(INPUT_POST, 'wineryName', FILTER_DEFAULT);
        $wine_classification = filter_input(INPUT_POST, 'wineClassification', FILTER_DEFAULT);
        $wine_content = filter_input(INPUT_POST, 'wineContent', FILTER_DEFAULT);
        $wine_timeGuard = filter_input(INPUT_POST, 'timeGuard', FILTER_DEFAULT);
        $wine_temp = filter_input(INPUT_POST, 'wineTemp', FILTER_DEFAULT);
        $wine_harmonization = filter_input(INPUT_POST, 'wineHarmonization', FILTER_DEFAULT);
        $wine_description = filter_input(INPUT_POST, 'wineDescription', FILTER_DEFAULT);
        $user_id = $_SESSION['id'];
        
        $stmt = $connection->prepare("INSERT INTO tbl_wines(vin_name, vin_country, vin_region, vin_year, vin_literage, vin_type, vin_grape, vin_winery, vin_classification, vin_content, vin_guardTime, vin_temp, vin_harmonization, vin_description) 
        VALUES (:wineName, :wineCountry, :wineRegion, :wineYear, :literage, :wineType, :grape, :wineryName, :wineClassification, :wineContent, :timeGuard, :wineTemp, :wineHarmonization, :wineDescription);");
    
        $stmt->bindValue(':wineName', $wine_name);
        $stmt->bindValue(':wineCountry', $wine_country);
        $stmt->bindValue(':wineRegion', $wine_region);
        $stmt->bindValue(':wineYear', $wine_year);
        $stmt->bindValue(':literage', $wine_literage);
        $stmt->bindValue(':wineType', $wine_type);
        $stmt->bindValue(':grape', $wine_grape);
        $stmt->bindValue(':wineryName', $wine_winery);
        $stmt->bindValue(':wineClassification', $wine_classification);
        $stmt->bindValue(':wineContent', $wine_content);
        $stmt->bindValue(':timeGuard', $wine_timeGuard);
        $stmt->bindValue(':wineTemp', $wine_temp);
        $stmt->bindValue(':wineHarmonization', $wine_harmonization);
        $stmt->bindValue(':wineDescription', $wine_description);

        if($stmt->execute()){
            echo"Dados enviados";
            header('location:../page/home.php');
    
        }else{
            echo"Dados não Enviados";
            
        }


    }else
    {
        header("location: ../index.php");
    }



?>