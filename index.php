<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toDoList</title>
  </head>
  <body>
    <?php
      echo "<h1>toDoList</h1>";

      //Voici la liste des tâches
      $taches = ["acheter du pain", "faire une machine", "arroser les fleurs", "ranger la bibliothèque"];


      //On parcourt la liste des tâches 
      foreach($taches as $tache):
      
      //On affiche les taches dans une liste  
    ?> 
        <ul>
          <li><?= $tache ?></li>
        </ul>

    <?php
    endforeach;
    ?>
    

      //On veut afficher le nombre de tâches à faire

      //On fait une boucle for pour parcourir le tableau


      

    
  </body> 
</html>