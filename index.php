<?php require 'inc/header.php'?>
<?php require 'inc/connect.php' ?>
<?php require 'inc/list.php' ?>
<?php require 'inc/add.php' ?>



  <div class="add-task-container">
    <form class="col-12 d-flex justify-content-center"  method="post" autocomplet="off" action="inc/add.php">
        
          <input type="text" placeholder="ajouter une tâche" name="newtask" class="form-control">
        
          <button type="submit" class="btn btn-info ms-1" style="font-size:15px; color:white; font-weight:bold;"><span>&#43;</span></button>
        
    </form>
  </div>
      <div class="tasks_container">
      <?php $taskCounter=0 ?>

        <!--On parcourt la liste des tâches venant de la bdd grâce à la boucle foreach-->
        <?php foreach ($tasksList as $taskData) { ?>
          
          <!--On affiche les taches dans une liste-->   
          <form class="task alert alert-light d-flex justify-content-between" role="alert" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 8px 8px;">

          <?php 
            if($taskData['status']== 2){?>
              <div class="task-data">
                
                <label class="custom-control-label checked" style="white-space:pre-wrap;" for="customCheck1"><?= $taskData['name'] ?></label>
              </div>

            <?php } else { ?>
            
              <div class="task-data">
                
                <label class="custom-control-label" style="white-space:pre-wrap;" for="customCheck1"><?= $taskData['name'] ?></label>
              </div>
              
      <?php $taskCounter++; } ?>

            <div class="buttons d-flex justify-content-around">

              <a class="btn btn-outline-info"  type="submit" href="inc/update.php?id=<?= $taskData['id']?>&action=checked" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">V</a>

              <a class="btn btn-danger ms-1"  type="submit" href="inc/delete.php?id=<?= $taskData['id']?>" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">X</a>
            </div>
          </form>
        <?php } ?>
      </div>
      <div class="tasks-counter">           
        <span class="badge text-bg-warning" style="font-size:16px;"><?=$taskCounter ?></span>
      </div>
       
 <?php require 'inc/footer.php'?>