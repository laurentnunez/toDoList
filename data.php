<?php
  //Voici la liste des tâches
  $taches = [
    "acheter du pain",
    "faire une machine",
    "arroser les fleurs",
    "ranger la bibliothèque",
    "laver la voiture",
    "passer le balais",
    "aller courir un peu quand même",
  ];



  require 'inc/connect.php';

  $sql = "UPDATE `tasks` , SET `status`= 2 , WHERE=$id "; 


?>
