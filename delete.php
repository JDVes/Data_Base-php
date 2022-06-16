
<?php

// Inclusion de données

include_once('add_user.php');


// Declaration de variable et affectation de données récupérer

if(isset($_GET['deletid'])){
    $id=$_GET['deletid'];

// Delete DATA

$sql = " DELETE FROM user_container WHERE id= $id ";
$req= $dbh -> query($sql);
//  while($row = $req->fetch(PDO::FETCH_ASSOC)) : ;
if($req){
    echo "Suppression réussie";
    header('location:afficher.php');
} else{
    echo "Suppression échoué";
}

}



?>