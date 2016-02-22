<?php
 $pseudo=$_POST['pseudo'];
 $tweet=$_POST['tweet'];
 include('connect.php')//j'include le ficher de connection a la base de donnée
 $send = $bdd->query("INSERT INTO tweet VALUES('','$pseudo','$tweet')");
 //j'insert les valeurs des inputs pseudo et tweet dans la table tweet
 ?>
  <?php
  header('Location: index.php');
  //je redirige vers les routes
  ?>
