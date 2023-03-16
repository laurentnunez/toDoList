
<?php
//AJOUTER UNE TACHE DANS LA BASE DE DONNÉES

   

    $name= strip_tags($_POST["newtask"]);
    $active = 1;

    require 'inc/connect.php';

    $sql = "INSERT INTO `tasks` (`name`,`status`) VALUES (:title , :active)"; 

    //On prépare la requête
    $query = $pdo->prepare($sql);

    //On ajoute les valeurs
    $query->bindValue(":title", $name, PDO::PARAM_STR);
    $query->bindValue(":active", $active, PDO::PARAM_STR);

    //On éxecute la requête
    if(!$query->execute()){
      die("ça n'a pas marché :(");
    };
  
?>