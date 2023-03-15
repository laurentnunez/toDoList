

<?php
//Connexion à la base de données
  //On indique le Data Source Name pour nous permettre de se connecter à la base de données
   $dataSourceName = "mysql:dbname=mytodolist;host=localhost;charset=UTF8";

  //On met dans des variables le login et le mot de passe
   $user = 'explorateur';
   $password = 'Ereul9Aeng';

  //On crée la connexion en MySQL et PHP avec PDO
  //On instancie la classe PDO (qui représente la connexion)
   $pdo = new PDO(
        $dataSourceName,
        $user,   // login"
        $password, // motdepasse"
        [ PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING ]
    );


    //On indique la requête qu'on souhaite lancer
    //On récupère tous les enregistrements depuis la table "tasks"
    //Les enregistrements seront classés par date de création (de la plus récente à la plus ancienne)
    $sql = "SELECT*FROM `tasks` ORDER BY `created_at` DESC";

    //TO DO
    //Algorythme permettant d'afficher un message s'il n'y a aucune tâche


    //On exécute la requête et on récupère au format PDOStatement le jeu de résultats
    $pdoStatement = $pdo->query( $sql );

    //On demande à) cet objet de nous renvoyer les résultats sous forme de tableau
    //On utilise pour cela la méthode "fetchAll"
    $tasksList = $pdoStatement->fetchAll( PDO::FETCH_ASSOC );

    //var_dump($tasksList);


?>