<?php require 'inc/header.tpl.php'?>
<?php require 'data.php' ?>
<?php require 'db.php' ?>

  <div class="add-task-container">
    <form class="col-12 d-flex justify-content-between"  method="POST" autocomplet="off" action="add.php">
        <div class="col-10">
          <input type="text" placeholder="ajouter une tâche"  name="newtask" class="form-control"> 
        </div>
        <div class="col-1">
          <button type="submit" class="btn btn-info"><span>&#43;</span></button>
        </div>
        
        <?php $taskCounter=0 ?>
        
       
    </form>
  </div>
      <div class="tasks_container ">
      
        <!--On parcourt la liste des tâches venant de la bdd grâce à la boucle foreach-->
        <?php foreach ($tasksList as $taskData) { ?>
          
          <div class="col-1">           
          <span class="badge text-bg-warning">Catégorie</span>
          </div>
          <!--On affiche les taches dans une liste-->   
          <div class="task alert alert-light d-flex justify-content-between" role="alert" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

          <?php 
            if($taskData['status']== 2){?>
              <div class="task-data">
                <input class="custom-control-input" type="checkbox" checked style="width:2rem; height:1.5rem;">
                <label class="custom-control-label checked" for="customCheck1"><?= $taskData['name'] ?></label>
              </div>
            <?php } else { ?>
            
              <div class="task-data">
                <input class="custom-control-input" type="checkbox" style="width:2rem; height:1.5rem;">
                <label class="custom-control-label" for="customCheck1"><?= $taskData['name'] ?></label>
              </div>
              
            <?php $taskCounter++; } ?>
            
            <div class="buttons d-flex justify-content-around" style="width:6rem;">
              <button class="btn btn-outline-info" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Modifier</button>
              <button class="btn btn-outline-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">X</button>
            </div>
          </div>
        <?php } ?>
        <div class="tasks-counter col-1">           
          <span class="badge text-bg-success"><?=$taskCounter ?></span>
        </div>
        
      </div>
       
 <?php require 'inc/footer.tpl.php'?>