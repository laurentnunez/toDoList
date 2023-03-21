<?php
 require_once '../inc/connect.php';
 //var_dump ($_GET);

 if($_GET["action"]=== "checked") {

    $sql = "UPDATE `tasks` SET `status`= 2 WHERE `id`= :id";

    $query = $pdo->prepare($sql);
    $query->bindParam(":id", $_GET["id"]);
    if(!$query->execute()){
        die("ça n'a pas marché :(");
      };
    header("Location: ../index.php");

 }
        
?>