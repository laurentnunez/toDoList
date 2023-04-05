<?php
 require_once '../inc/db_connect.php';
 //var_dump ($_GET);

 if($_GET["action"]=== "checked") {


    $sql = "UPDATE `tasks` SET `status`= 2 WHERE `id`= :id";

    $query = $pdo->prepare($sql);
    $query->bindParam(":id", $_GET["id"]);
    if(!$query->execute()){
        die("ça n'a pas marché :(");
      };
    header("Location: ../app.php");

 }else{
  if($_GET["action"]=== "nochecked") {


    $sql = "UPDATE `tasks` SET `status`= 1 WHERE `id`= :id";

    $query = $pdo->prepare($sql);
    $query->bindParam(":id", $_GET["id"]);
    if(!$query->execute()){
        die("ça n'a pas marché :(");
      };
    header("Location: ../app.php");

 }
 }
        
?>