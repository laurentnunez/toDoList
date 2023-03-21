<?php require 'inc/header.php'?>
<?php require 'inc/connect.php' ?>
<?php require 'inc/list.php' ?>
<?php require 'inc/add.php' ?>

  <div class="add-task-container">
    <form class="col-12 d-flex justify-content-between"  method="post" autocomplet="off" action="inc/add.php">
        <div class="col-10">
          <input type="text" placeholder="ajouter une tâche"  name="newtask" class="form-control">
        </div>
        <div class="col-1">
          <button type="submit" class="btn btn-info" style="font-size:16px;"><span>&#43;</span></button>
        </div>
    </form>
  </div>
      <div class="tasks_container ">
      <?php $taskCounter=0 ?>
        <!--On parcourt la liste des tâches venant de la bdd grâce à la boucle foreach-->
        <?php foreach ($tasksList as $taskData) { ?>
          
          <!--On affiche les taches dans une liste-->   
          <form class="task alert alert-light d-flex justify-content-between" role="alert" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

          <?php 
            if($taskData['status']== 2){?>
              <div class="task-data">
                <input class="custom-control-input" type="checkbox" checked style="width:2rem; height:1.5rem;">
                <label class="custom-control-label checked" for="customCheck1"><?= $taskData['name'] ?></label>
              </div>
            <?php } else { ?>
            
              <div class="task-data">
                <input class="custom-control-input" method="post" type="checkbox" name="checkbox" action="inc/update.php" style="width:2rem; height:1.5rem;">
                <?php $id=$taskData['id']; 
              //*var_dump ($id);
            ?>
                <label class="custom-control-label" for="customCheck1"><?= $taskData['name'] ?></label>
              </div>
              
            <?php $taskCounter++; } ?>
            
            <div class="buttons d-flex justify-content-around">
              <button class="btn btn-outline-danger" method="post" type="submit" name="delete" action="inc/delete.php" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">X</button>
            </div>
            </form>
        <?php } ?>
      </div>
      <div class="tasks-counter">           
        <span class="badge text-bg-warning">Il y a <?=$taskCounter ?> tâche(s) à faire</span>
      </div>
       
 <?php require 'inc/footer.php'?>