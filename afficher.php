
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
     require_once('add_user.php');
     $req= $dbh -> query('SELECT * FROM user_container ORDER BY id DESC ');
      while($row = $req->fetch(PDO::FETCH_ASSOC)) : ?>;
     <tr>
       <td><?php echo htmlspecialchars($row['id']); ?></td>
       <td><?php echo htmlspecialchars($row['name']); ?></td>
       <td><?php echo htmlspecialchars($row['body']); ?></td>
       <td><?php echo htmlspecialchars($row['priority']); ?></td>
       <td><?php echo htmlspecialchars($row['type']); ?></td>
       <td><button  class = "btn btn-primary"  ><a class = text-light  href="update.php?updateid=<?php echo htmlspecialchars($row['id']);?>">update</a></button></td>;
       <td><button class= " btn btn-danger " ><a class = text-light href="delete.php?deletid=<?php echo htmlspecialchars($row['id']); ?>  ">delete</a></button></td>;
     </tr>
     <?php endwhile; ?>
   </tbody>
        <button><a href="form.php">Page d'inscription</a></button>
 </table>
</body>
</html>