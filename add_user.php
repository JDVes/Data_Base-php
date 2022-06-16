<?php


 //Variable de connection à la bdd
 $db_user='root';
 $db_pass='';

 //Connection à la bdd
 try {
     $dbh = new PDO('mysql:host=localhost;dbname=messages_id', $db_user, $db_pass);
    //  echo "connection effectué";

 //Gestion des erreur en cas d'échec de connection à la bdd
 } catch (PDOException $e) {
     print "Erreur !: " . $e->getMessage() . "<br/>";
 }
  ?>

