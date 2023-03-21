<?php
 
 require_once '../inc/connect.php';
  var_dump ($_GET);
  
  $sql = "DELETE FROM `tasks` WHERE `id`= :id";

  $query = $pdo->prepare($sql);
  $query->bindParam(":id", $_GET["id"]);
  if(!$query->execute()){
    die("ça n'a pas marché :(");
  };

  header("Location: ../index.php");
  
?>