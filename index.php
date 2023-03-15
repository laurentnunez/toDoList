<?php require 'inc/header.tpl.php'?>
<?php require 'data.php' ?>

<!--On compte le nombre de tâches dans le tableau-->
<?php $nbeTaches = count($taches); ?>

    <form class="add-task-section d-flex justify-content-around" method="get">
          <div class="col-9">
            <input type="text" placeholder="ajouter une tâche"  name="newtask" class="form-control"> 
          </div>
          <div class="col-1">
            <button type="submit" class="btn btn-info"><span>&#43;</span></button>
          </div> 
          <div class="col-1"> 
            <span class="badge text-bg-warning"><?= $nbeTaches?></span>
          </div>
    </form>
    
      <div class="tasks_container ">
        <!--On parcourt la liste des tâches grâce à la boucle foreach-->
        <?php foreach ($taches as $tache) { ?>
          <!--On affiche les taches dans une liste-->   
          <div class="task alert alert-light d-flex justify-content-between" role="alert" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
            <div class="task-data">
              <input class="custom-control-input" type="checkbox" style="width:2rem;">
              <label class="custom-control-label" for="customCheck1"><?= $tache ?></label>
            </div>
            <div class="buttons d-flex justify-content-around" style="width:6rem;">
              <button class="btn btn-outline-info" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Modifier</button>
              <button class="btn btn-outline-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">X</button>
            </div>
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