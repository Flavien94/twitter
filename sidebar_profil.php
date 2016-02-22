<!-- RECUPERATION DONNEES DE L'USER -->
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
 <!-- FIN RECUPERATION DONNEES DE L'USER -->


<!-- PAGE DE TEST -->

<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div align='center'>
      <h1>Profil de <?php echo $userinfo['login']; ?></h1>
      <br>
      Pseudo = <?php echo $userinfo['login']; ?>
      <br>
      Mail = <?php echo $userinfo['email']; ?>
      <br>
    <a href="logout.php">Se déconnecter</a>
    <form action="" method="post">

    </form>
  </div>

  </body>
</html>
 -->

<?php
}// fin du if
}// fin du if
 ?>
