
<?php
//AJOUTER UNE TACHE DANS LA BASE DE DONNÉES  
if(isset($_POST["newtask"]) or isset($_POST["priority"])){

  if(!empty($_POST["newtask"]) && !empty($_POST["priority"])){

      $name= strip_tags($_POST["newtask"]);
      $active = 1;
      $priority = ($_POST["priority"]);

      require '../inc/db_connect.php';
      $sql = "INSERT INTO `tasks` (`name`,`status`, `id_priority`) VALUES (:name , :active, :priority)"; 

      //On prépare la requête
      $query = $pdo->prepare($sql);
  
      //On ajoute les valeurs
      $query->bindValue(":name", $name, PDO::PARAM_STR);
      $query->bindValue(":active", $active, PDO::PARAM_STR);
      $query->bindValue(":priority", $priority, PDO::PARAM_STR);

      //On éxecute la requête
    if(!$query->execute()){
      die("ça n'a pas marché :(");
    };

     header("Location: ../app.php");

    } 

    else {
      die("Le formulaire est incomplet !");
    }
    header("Location: ../app.php");
  }
    

    

    

    
  
   
?>