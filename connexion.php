<?php include 'inc/header.php'?>

<?php
  if(!empty($_POST)){

    if(isset($_POST["username"], $_POST["password"])

    && !empty($_POST["username"]) && !empty($_POST["password"])
    
    ){
      //le formulaire est complet

      //connexion
      require_once 'inc/connect.php';

      //vérification de l'username et du mot de passe
      $sql = "SELECT * FROM `user` WHERE `login_user` = :username";
      $query = $pdo->prepare($sql);
      $query->bindValue(":username", $_POST["username"], PDO::PARAM_STR);
      
      if(!$query->execute()){
        die("ça n'a pas marché :(");
      };


      $user = $query->fetch();
      

      if(!$user){
        die("L'utilisateur et/ou le mot de passe est incorrect !");
      }

    if( $_POST["password"] === $user["password"]) {
      header("Location: ../toDoList/index.php");

    } else {
      die("L'utilisateur et/ou le mot de passe est incorrect !");
    }


      //username et password sont donc ok

    }
    else{
      die("le formulaire est incomplet");
    }


  }

?>

<div class="user-container">
    <form class="d-flex flex-column" method="post" action="">
        
          <input type="text" placeholder="utilisateur" name="username" class="form-control">
       
          <input type="password" placeholder="mot de passe" name="password" class="form-control mt-1">
          <button type="submit" class="btn btn-warning mt-1" style="font-size:16px;">Connexion</button>   
        
    </form>
</div>


<?php include 'inc/footer.php'?>