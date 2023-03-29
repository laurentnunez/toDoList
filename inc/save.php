<?php
 
if (isset($_POST["taskname"])) {
    $name= strip_tags($_POST["taskname"]);
    $id = ($_POST["save-button"]);

    require_once '../inc/connect.php';

    //$name = $_GET['name'];
    //var_dump($id);

    $sql = "UPDATE `tasks`
    SET `name`= :name
    WHERE `id`= :id";

    //on prépare la requête
    $query = $pdo->prepare($sql);

   $query->bindParam(":id", $id, PDO::PARAM_INT);

   $query->bindValue(":name", $name, PDO::PARAM_STR);


   if (!$query->execute()) {
    die("ça n'a pas marché :(");
    };
    header("Location: ../index.php");
}

?>