<?php
// Affichage des donnéés enregistrer
print_r($_POST);

// déclaration de variable et affection des champs de donné a ces variables 

$name = $_POST["name"];
$message = $_POST["message"];
$priority = filter_input(INPUT_POST,'priority' , FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST,'type' , FILTER_VALIDATE_INT);
$terms = filter_input(INPUT_POST,'terms' , FILTER_VALIDATE_BOOL);

if ( ! $terms) {
    die('terms must be accepted');
}
//  connetion a la base de donnée

$host = 'localhost';
$dbname = 'message_db';
$username = 'root';
$password = "";

// syntaxe de connetion au serveur de la base de donnée

// $conn = mysqli_connect(hostname: 