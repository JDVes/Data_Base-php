<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

</head>

<body>

    <h1>Contacts</h1>

    <form action="form.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <label for="message">Message</label>
        <textarea name="message" id="message" name="message" cols="30" rows="10"></textarea>

        <label for="priority">priority</label>
        <select name="priority" id="priority" name="priority">
            <option value="1" >Low</option>
            <option value="2" selected >Medium</option>
            <option value="3" >High</option>
        </select>

        <fieldset>
            <legend>type</legend>

            <label for="">
                <input type="radio" name="type" checked>
                complaint
            </label>

            <br>

            <label for="">
                <input type="radio" name="type" id="type"> 
                Suggestion
            </label>
        </fieldset>

        <label for="">
            <input type="checkbox" name="terms" id="case">
            I agree to the terms and conditions
        </label>

        <br>

        <button>Send</button>
        <button></button>


    </form>

    <?php


    $host = "localhost";
    $dbname = "message_id";
    $username = "root";
    $password = "";



    $name = $_POST["name"]; 
    $message = $_POST["message"];
    $priority = $_POST["priority"]; 
    $type = $_POST["type"];



// syntaxe de connection au serveur de la base de donnée

 $conn = mysqli_connect($host, $username,$password, $dbname);

if (mysqli_connect_errno()) {
    die("connection error : " . mysqli_connect_error());
};



echo "connection successful.";






// $statement = $mysqli->prepare("INSERT INTO users (name, email) VALUES(?, ?)"); 
//     //Associer les valeurs et exécuter la requête d'insertion
//     $statement->bind_param('ss', $name, $email); 
    
//     if($statement->execute())



// $sql = "SELECT id, name, FROM container WHERE name='fadil'";
// $result = $conn->query($sql);




  




?>
    
</body>

</html>