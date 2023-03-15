<?php require 'inc/header.tpl.php'?>
<?php require 'data.php' ?>

<!--On compte le nombre de tâches dans le tableau-->
<?php $nbeTaches = count($taches); ?>

    <form method="get">
      <div class="container ">
        <div class="row justify-content-center m-auto">
          <div class="col-2"> 
          <span class="badge text-bg-info"><?= $nbeTaches?></span>
          </div>
          <div class="col-8">
            <input type="text" name="newtask" class="form-control"> 
          </div>
          <div class="col-2">
            <button class="btn btn-outline-info">+</button>
          </div> 
        </div>
      </div>
    </form>
    
      <div class="tasks_container ">
        <!--On parcourt la liste des tâches grâce à la boucle foreach-->
        <?php foreach ($taches as $tache) { ?>
          <!--On affiche les taches dans une liste-->   
          <div class="alert alert-light" role="alert">
            <?= $tache ?>
            <button class="btn btn-outline-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">X</button>
          </div>

        <?php } ?>
      </div>
    <!--Compteur du nombre de taches-->
    <div class="counter_container">

        <?php

        $nbeTaches = count($taches);
        echo '<p>Il y a ' . $nbeTaches . ' tâche(s) à faire.</p>';

        //On affiche la tâche qui vient d'être ajouter
        //Attention, pour l'instant, elle ne s'affiche pas dans liste des tâches précédantes !
        //var_dump($_GET["newtask"]);

        ?>
    </div> 
 <?php require 'inc/footer.tpl.php'?>