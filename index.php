<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toDoList</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center text-bg-primary">toDoList</h1>
      <?php
      //Voici la liste des tâches
      $taches = ["acheter du pain", "faire une machine", "arroser les fleurs", "ranger la bibliothèque", "laver la voiture"];
      $nbeTaches = count($taches);
      ?>
    <form method="get">
      <div class="container ">
        <div class="row justify-content-center m-auto">
          <div class="col-2">
          <span class="badge text-bg-primary"><?= $nbeTaches?></span>
          </div>
          <div class="col-8">
            <input type="text" name="newtask" class="form-control"> 
          </div>
          <div class="col-2">
            <button class="btn btn-outline-primary">+</button>
          </div> 
        </div>
      </div>
    </form>
  <div class="container">
    <div class="col-12 m-auto mt-3">  
      <table class="table">
        <thead>
        </thead>
        <tbody>      
        <?php
          //On parcourt la liste des tâches grâce à la boucle foreach
          foreach ($taches as $tache) {
        ?> 
          <!--On affiche les taches dans une liste--> 
          <tr >
            
            
            <td ><?= $tache ?></td>
            <td ><button class="btn btn-outline-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Suppr</button></td>
            
          </tr>
        <?php
        }
        ?>
        </tbody>
      </table>
    </div> 
  </div>
    <!--Compteur du nombre de taches-->
    <?php
    
    $nbeTaches = count($taches);
    echo '<p>Il y a ' . $nbeTaches . ' tâche(s) à faire.</p>';

    
    var_dump($_GET["newtask"]);
    
    ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  
  </body> 
</html>