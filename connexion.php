<?php
      try
      {
        // Connexion à la base de données
        $bdd = new PDO('mysql:host=localhost;dbname=gestionclients;charset=utf8', 'root' , '');
      } catch (Exception $e)
      {
        die('Erreur de connexion.' . $e->getMessage());
      }
?>