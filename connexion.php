<?php include 'inc/header.php'?>

<div class="user-container">
    <form class="d-flex flex-column" method="post" action="appconnect.php">
        
          <input type="text" placeholder="utilisateur" name="username" class="form-control" required = required>
       
          <input type="password" placeholder="mot de passe" name="password" class="form-control mt-1" required = required>
          <button type="submit" class="btn btn-warning mt-1" style="font-size:16px;">Connexion</button>   
        
    </form>
</div>

<?php include 'inc/footer.php'?>