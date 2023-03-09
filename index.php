<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toDoList</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@200;500&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
    <h1>toDoList</h1>

    <div class="add__task__container">
      <button class="add-task-button" type="button">Ajouter</button>
      <input type="text" class="form-control" name="task" required/>
    </div>
  </header>
  
      <ul class="tasks__container">
        
    <?php
      
      //Voici la liste des tâches
      $taches = ["acheter du pain", "faire une machine", "arroser les fleurs", "ranger la bibliothèque", "laver la voiture"];

      //On parcourt la liste des tâches 
      foreach($taches as $tache):

    ?> 
  
      <!--On affiche les taches dans une liste--> 
          <li> <?= $tache ?>  <button class="taskbox" type="button" ></button></li>
        

    <?php
    endforeach;
    ?>
    </ul> 

    <!--Compteur du nombre de taches-->
    <?php
    
    $nbeTaches = count($taches);
    echo '<p>Il y a ' . $nbeTaches . ' tâche(s) à faire.</p>';

    ?>

    
  </body> 
</html>