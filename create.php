<?php

// Inclusion de données

include_once 'add_user.php';



// Insert DATA

if(isset($_POST['submit'])){
$name = $_POST['name'];
$message = $_POST['message'];
$priority = $_POST['priority'];
$type = $_POST['type'];


$sql = " INSERT INTO user_container (name,body,priority,type)
               VALUES ('$name','$message',$priority,$type)";
$req= $dbh -> query($sql);

//  while($row = $req->fetch(PDO::FETCH_ASSOC)) : ;

if($req){
    echo "insertion réussie";
} else{
    echo "insertion échoué";
}
}

header('location:afficher.php');

?>