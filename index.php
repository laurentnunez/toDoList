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
          <form class="task alert alert-light d-flex justify-content-between" role="alert" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 8px 8px;">

          <?php 
            if($taskData['status']== 2){?>
              <div class="task-data">
                
              <a class="btn" style="color:green; padding:0px;" type="submit" href="inc/update.php?id=<?= $taskData['id']?>&action=nochecked"><ion-icon name="checkmark-circle" size="large"></ion-icon></a>

                <label class="custom-control-label checked" style="white-space:pre-wrap;" for="autoSizingInput"><?= $taskData['name'] ?></label>

              </div>

              <div class="buttons d-flex justify-content-around">

              

              
            <?php } else { ?>
            
              <div class="task-data">
               
                <a class="btn" style="color:green; padding:0px;" type="submit" href="inc/update.php?id=<?= $taskData['id']?>&action=checked"><ion-icon size="large" name="checkmark-circle-outline"></ion-icon></a>

                <input type="text" name="task" for="autoSizingInput" style="border:none;font-size:14px;" class="form-control" value="<?= $taskData['name'] ?>">

              </div>

              <div class="buttons d-flex justify-content-around">

              <a class="btn" style="color:purple; padding:0px;" type="submit" href="inc/update.php?id=<?= $taskData['id']?>&action=nochecked"><ion-icon name="save" size="large"></ion-icon></a>
              
      <?php $taskCounter++; } ?>

          

              <a class="btn" style="color:red; padding:0px;" type="submit" href="inc/delete.php?id=<?= $taskData['id']?>" ><ion-icon size="large" name="close-circle"></ion-icon></a>

            </div>
          </form>
        <?php } ?>
      </div>
      <div class="tasks-counter">           
        <span class="badge text-bg-warning" style="font-size:16px;"><?=$taskCounter ?></span>
      </div>
       
 <?php require 'inc/footer.php'?>