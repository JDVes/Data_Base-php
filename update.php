
<?php

// Inclusion de données

include_once('form.php');


if(isset($_GET['updateid'])){
    $id=$_GET['updateid'];

// update DATA
$sql = " UPDATE user_container SET name = 'fadil'  WHERE id  = 2 ";

$req= $dbh -> query($sql);
//  while($row = $req->fetch(PDO::FETCH_ASSOC)) : ;
if($req){
    echo "mise a jour réussie";
} else{
    echo "mise a jour échoué";
}
}


?>