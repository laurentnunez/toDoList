<?php
 
 require_once '../inc/connect.php';
 

//$name = ;

    $sql = "UPDATE `tasks` 
    SET `name`= :name 
    WHERE `id`= :id";

//on prépare la requête
    $query = $pdo->prepare($sql);

    
    $query->bindParam(":id", $_GET["id"]);

    $query->bindValue(":name", $name, PDO::PARAM_STR);


    if (!$query->execute()) {
        die("ça n'a pas marché :(");
    };
    header("Location: ../index.php");



?>