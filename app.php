<?php 
session_start();
  if(!isset($_SESSION["user"])){
    header("Location: index.php");
  }
//var_dump($_SESSION);
?>
<?php 
  require 'inc/header.php';
  require 'inc/db_connect.php'; 
  require 'inc/list.php'; 
  require 'inc/add.php'; 
  require 'inc/addTask.php';
?>


<div class="tasks_container">
  <?php $taskCounter=0 ?>
  
  <!--On parcourt la liste des tâches venant de la bdd grâce à la boucle foreach-->
  <?php foreach ($tasksList as $taskData) { ?>
          
    <!--On affiche les taches dans une liste-->   
    
    
      <form class="callout callout-warning d-flex justify-content-between"
        <?php if($taskData['id_priority']== 1){?>
        style="border-left-color:#d9534f;"
        
        <?php } if($taskData['id_priority']== 2){?>
        style="border-left-color:#f0ad4e;"

        <?php } if($taskData['id_priority']== 3){?>
        style="border-left-color:#5cb85c;"<?php }?>
        >

       <?php 
       if($taskData['status']== 2){?>
        <div class="col-9 task-data d-flex align-content-center">
                
          <a class="btn" style="color:green; padding:0px;" type="submit" href="inc/update.php?id=<?= $taskData['id']?>&action=nochecked"><ion-icon name="checkmark-circle" size="large"></ion-icon></a>

          <label class="task custom-control-label checked" style="white-space:pre-wrap; padding-left:0.7rem;" for="autoSizingInput"><?= $taskData['name'] ?></label>
        </div>

        <div class="buttons d-flex justify-content-around">
              
      <?php } else { ?>
        <div class="col-9 task-data">

          <a class="btn" style="color:green; padding:0px;" type="submit" href="inc/update.php?id=<?= $taskData['id']?>&action=checked"><ion-icon size="large" name="checkmark-circle-outline"></ion-icon></a>

          <input type="text" name="taskname"  style="border:none;" class="task form-control" value="<?= $taskData['name'] ?>">             

        </div>

        <div class="buttons d-flex justify-content-around d-flex align-items-center">

            <button name="save-button" class="btn" style="color:purple; padding:0px;" type="submit" value="<?= $taskData['id']?>"><ion-icon name="save-outline" size="large"></ion-icon></button>       
              
          <?php $taskCounter++; } ?>
          
            <a class="btn" style="color:red; padding:0px;" type="submit" href="inc/delete.php?id=<?= $taskData['id']?>"><ion-icon size="large" name="close"></ion-icon></a>

        </div>
    </form>
  <?php } ?>
    </div>
    <div class="tasks-counter">           
      <h4><span class="badge text-bg-warning"><?=$taskCounter ?></span></h4>
    </div>
    <form class="disconnect_button d-flex justify-content-center" method="post" action="inc/deconnexion.php">
      <button class="disconnect btn btn-danger" style="margin-bottom:1rem;">Déconnexion</button>
    </form>
    
<?php require 'inc/footer.php'?>