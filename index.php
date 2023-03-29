<?php require 'inc/header.php'?>
<?php require 'inc/connect.php' ?>
<?php require 'inc/list.php' ?>
<?php require 'inc/add.php' ?>



<?php require 'inc/addTask.php' ?>

      <div class="tasks_container">
      <?php $taskCounter=0 ?>

        <!--On parcourt la liste des tâches venant de la bdd grâce à la boucle foreach-->
        <?php foreach ($tasksList as $taskData) { ?>
          
          <!--On affiche les taches dans une liste-->   
          
          <form class="task alert alert-light d-flex justify-content-between d-flex align-content-center" role="alert" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

          <?php 
            if($taskData['status']== 2){?>
              <div class="task-data d-flex align-content-center">
                
              <a class="btn" style="color:green; padding:0px;" type="submit" href="inc/update.php?id=<?= $taskData['id']?>&action=nochecked"><ion-icon name="checkmark-circle" size="large"></ion-icon></a>

                <label class="task custom-control-label checked" style="white-space:pre-wrap;" for="autoSizingInput"><?= $taskData['name'] ?></label>

              </div>

              <div class="buttons d-flex justify-content-around">
              
            <?php } else { ?>
              <div class="task-data">

              <a class="btn" style="color:green; padding:0px;" type="submit" href="inc/update.php?id=<?= $taskData['id']?>&action=checked"><ion-icon size="large" name="checkmark-circle-outline"></ion-icon></a>

                <input type="text" name="taskname" style="border:none; font-size:0.8rem;" class="task form-control col-10" value="<?= $taskData['name'] ?>">             

              </div>

              <div class="buttons d-flex justify-content-around d-flex align-items-center">

              <?php if($taskData['id_priority']== 1){?>
                  <span class="badge rounded-pill text-bg-danger" style="font-size:10px; height:13px; margin-right:0.5rem;"> </span>

                <?php } if($taskData['id_priority']== 2){?>
                  <span class="badge rounded-pill text-bg-warning" style="font-size:10px; height:13px; margin-right:0.5rem;"> </span>

                <?php } if($taskData['id_priority']== 3) {?>
                  <span class="badge rounded-pill text-bg-success" style="font-size:10px; height:13px; margin-right:0.5rem;"> </span>
                <?php }?> 

              <a class="btn" style="color:purple; padding:0px;" type="submit" href="inc/save.php?id=<?= $taskData['id']?>"><ion-icon name="save-outline" size="large"></ion-icon></a>

              
              
      <?php $taskCounter++; } ?>

<<<<<<< HEAD
            
            <div class="buttons d-flex justify-content-around">
 
              <a class="btn" style="color:green; padding:0px;" type="submit" href="inc/update.php?id=<?= $taskData['id']?>&action=checked"><ion-icon size="large" name="checkmark-circle"></ion-icon></a>

              <a class="btn" style="color:red; padding:0px;" type="submit" href="inc/delete.php?id=<?= $taskData['id']?>" ><ion-icon size="large" name="trash-bin"></ion-icon></a>
=======
          
              <a class="btn" style="color:red; padding:0px;" type="submit" href="inc/delete.php?id=<?= $taskData['id']?>"><ion-icon size="large" name="close"></ion-icon></a>


>>>>>>> update

            </div>
          </form>
        <?php } ?>
      </div>
      <div class="tasks-counter">           
        <h4><span class="badge text-bg-warning"><?=$taskCounter ?></span></h4>
      </div>

  
 <?php require 'inc/footer.php'?>