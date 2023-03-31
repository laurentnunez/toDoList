<?php
if (isset($_POST["username"]) && isset($_POST["password"])) {
    //connexion à la base
    require_once 'inc/connect.php';

    //vérification de l'username et du mot de passe
    $sql = "SELECT * FROM `user` WHERE `login_user` = :username";
    $query = $pdo->prepare($sql);
    $query->bindValue(":username", $_POST["username"], PDO::PARAM_STR);


    if (!$query->execute()) {
        die("ça n'a pas marché :(");
    };

//
    $user = $query->fetch();

    if(!$user){
      die("L'utilisateur et/ou le mot de passe est incorrect !");
    }


    if ($_POST["password"] === $user["password"]) {
        //echo("password ok");
        session_start();

        $_SESSION["user"] = $user["login_user"];
        
        header("Location: ../index.php");
        //var_dump($_SESSION["user"]);
    }else {
      die("password PAS OK");
    }
}
?>