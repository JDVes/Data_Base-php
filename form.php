<?php
// Affichage des donnéés enregistrer
// print_r($_POST);

// déclaration de variable et affection des champs de donné a ces variables 

$name = $_POST["name"];
$message = $_POST["message"];
$priority = filter_input(INPUT_POST,'priority' , FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST,'type' , FILTER_VALIDATE_INT);
$terms = filter_input(INPUT_POST,'terms' , FILTER_VALIDATE_BOOLEAN);

if ( ! $terms) {
    die("terms must be accepted");
};
//  connetion a la base de donnée

$host = "localhost";
$dbname = "message_id";
$username = "root";
$password = "";

// syntaxe de connetion au serveur de la base de donnée

 $conn = mysqli_connect($host, $username,$password, $dbname);

if (mysqli_connect_errno()) {
    die("connection error : " . mysqli_connect_error());
}

echo "connection successful.";

$sql = " INSERT INTO container (name,body,priority,type)
               VALUES (?,?,?,?)";

$stmt = mysqli_stmt_init ($conn);
if ( ! mysqli_stmt_prepare($stmt,$sql))
{
    die (mysqli_error($conn));

}

mysqli_stmt_bind_param($stmt, "ssii",
                        $name,
                        $message,
                        $priority,
                        $type);
 mysqli_stmt_execute($stmt);
 
 echo "record saved.";
header('location:index.php');
                    