 <?php
 session_start();//Je demarre la session
 include 'connect.php';//j'include le ficher de connection a la base de donnée
 $id = $_GET['id'];
 if($id == !null AND $id > 0 ){//si l'id n'est pas null et si il est plus grand que 0
   $getid = intval($id); //Retourne la valeur numérique entière de la variable $id
   $requser = $bdd->prepare("SELECT * FROM user WHERE id = ?");
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
   //Je selectionne les id de la table user qui = a l'id de la session de l'user
 if($userinfo['id'] == $_SESSION['id']){ // si l'id de la session de l'user = à un id de la table user affiche moi son profil
  ?>
 <!-- PAGE DE TEST -->

<!DOCTYPE html>
<!-- <html>
  <head>
    <meta charset="utf-8">
    <title></title>
<?php include 'link.php'; ?>
</head>
  <body>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <?php include 'sidebar_profil.php'; ?>
      </div>
    <div class="col-md-4">
      <div align='center'>
        <?php include 'wall_bar.php' ?>
      </div>
    </div>
    <div class="col-md-4">
      <?php include 'sidebar_tweet.php' ?>
    </div>
  </div>
</div>
  </body>
</html> -->
<!-- FIN_PAGE DE TEST -->

<?php
}//fin du if
}//fin du if
 ?>
