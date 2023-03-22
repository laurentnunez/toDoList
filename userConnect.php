<?php include 'inc/header.php'?>

<?php
  if(!empty($_POST)){

    if(isset($_POST["email"], $_POST["userpassword"])

    && !empty($_POST["email"]) && !empty($_POST["userpassword"])
    
    ){
      //le formulaire est complet
    }
    else{
      die("le formulaire est incomplet");
    }


  }

?>

<div class="user-container">
    <form class="d-flex flex-column" method="post" action="">
        
          <input type="email" placeholder="email" name="email" class="form-control">
       
          <input type="password" placeholder="mot de passe" name="userpassword" class="form-control mt-1">
          <button type="submit" class="btn btn-warning mt-1" style="font-size:16px;">Connexion</button>   
        
    </form>
</div>