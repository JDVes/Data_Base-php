<?php


 //Variable de connection à la bdd
 $db_user='root';
 $db_pass='';

 //Connection à la bdd
 try {
     $dbh = new PDO('mysql:host=localhost;dbname=messages_id', $db_user, $db_pass);
     $req= $dbh -> query('SELECT * FROM user_container ORDER BY id DESC ');

 //Gestion des erreur en cas d'échec de connection à la bdd
 } catch (PDOException $e) {
     print "Erreur !: " . $e->getMessage() . "<br/>";
 }
  ?>
<!DOCTYPE html>
<html>
<head>Afficher la table users</head>
<body>
 <h1>Liste des utilisateurs</h1>
 <table>
   <thead>
     <tr>
       <th>ID</th>
       <th>Name</th>
       <th>Message</th>
       <th>Priority</th>
       <th>Type</th>
       <th colspan="2">Action</th>
     </tr>
   </thead>
   <tbody>
     <?php
      while($row = $req->fetch(PDO::FETCH_ASSOC)) : ?>;
     <tr>
       <td><?php echo htmlspecialchars($row['id']); ?></td>
       <td><?php echo htmlspecialchars($row['name']); ?></td>
       <td><?php echo htmlspecialchars($row['body']); ?></td>
       <td><?php echo htmlspecialchars($row['priority']); ?></td>
       <td><?php echo htmlspecialchars($row['type']); ?></td>
       <td><button><a href="update.php">update</a></button></td>;
       <td><button class= " btn btn-danger " ><a class = text-light href="delete.php?deletid=<?php echo htmlspecialchars($row['id']); ?>  ">delete</a></button></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
</body>
</html>
