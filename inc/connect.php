<?php
//CONNEXION A LA BASE DE DONNEES

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

?>