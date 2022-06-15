<?php

// Inclusion de données

include_once 'add_user.php';

// Insert DATA

$sql = " INSERT INTO user_container (name,body,priority,type)
               VALUES (?,?,?,?)";

if(isset($_GET['deletid']))
    $id=$_GET['deletid'];

// Delete DATA

$sql = " DELETE FROM user_container WHERE id= $id ";
$req= $dbh -> query($sql);
//  while($row = $req->fetch(PDO::FETCH_ASSOC)) : ;
if($req){
    echo "Suppression réussie";
} else{
    echo "Suppression échoué";
}

?>