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
    
    <form action = "create.php" method="post"> 
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
                <input type="radio" value="1" name="type" checked>
                complaint
            </label>

            <br>

            <label for="">
                <input type="radio" value="2" name="type" id="type"> 
                Suggestion
            </label>
        </fieldset>

        <label for="">
            <input type="checkbox" name="terms" id="case">
            I agree to the terms and conditions
        </label>

        <br>


        <button name="submit">Send</button>
        


    </form>
<form action="">
<button><a href="afficher.php">Afficher</a></button>
</form>
   
    
</body>

</html>