

<?php
//LISTER TOUTES LES TACHES DE LA BASE DE DONNÉES

    //On indique la requête qu'on souhaite lancer
    //On récupère tous les enregistrements depuis la table "tasks"
    //Les enregistrements seront classés par date de création (de la plus récente à la plus ancienne)
    $sql = "SELECT*FROM `tasks` ORDER BY `created_at` DESC";

    //On exécute la requête et on récupère au format PDOStatement le jeu de résultats
    $pdoStatement = $pdo->query( $sql );

    //On demande à) cet objet de nous renvoyer les résultats sous forme de tableau
    //On utilise pour cela la méthode "fetchAll"
    $tasksList = $pdoStatement->fetchAll( PDO::FETCH_ASSOC );

    //var_dump($tasksList);
 
    //A TERMINER
    //Algorythme permettant d'afficher un message s'il n'y a aucune tâche
    if(!$tasksList){
        require 'inc/addTask.php';
        echo "Vous n'avez pas de tâches en cours...";
        require 'inc/footer.php';
        exit;
    }
?>