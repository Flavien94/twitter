<?php
session_start();//Je demarre la session
include 'connect.php';//j'include le ficher de connection a la base de donnée
$id = $_GET['id'];
if($id == !null AND $id > 0 ){//si l'id n'est pas null et si il est plus grand que 0
  $getid = intval($id);//Retourne la valeur numérique entière de la variable $id
  $requser = $bdd->prepare("SELECT * FROM user WHERE id = ?");
  $requser->execute(array($getid));
  $userinfo = $requser->fetch();
  //Je selectionne les id de la table user qui = a l'id de la session de l'user
  if (!empty($_POST['tweeté'])) {
  $tweet=$_POST['tweet'];
  $login=$userinfo['login'];
  $inserttweet = $bdd->prepare("INSERT INTO tweet(id_user,login_user,content) VALUES(?,?,?)");
  $inserttweet->execute(array($id,$login,$tweet));
  header('Location:wall.php?id='.$_SESSION['id']);
  //J'insert l'id de l'user, son login et le contenu de son tweet dans la table tweet et redirige vers la page wall.php
}
if($userinfo['id'] == $_SESSION['id']){ // si l'id de la session de l'user = à un id de la table user affiche moi ça:
 ?>

 <!-- FORMULAIRE DE TEST -->

<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div align='center'>
      <h2>Tweeté</h2>
    <form action="" method="post">
      <input type="text" name="tweet" value="">
      <input type="submit" name="tweeté" value="Envoyer" />
    </form>
  </div>
  </body>
</html> -->
<?php
}// fin du if
}// fin du if
 ?>
