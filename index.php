    <!-- ROUTES -->
<?php
  $uri = $_SERVER['REQUEST_URI'];
  if ($uri == "/"){
      include 'login.php';
      // Je renvoie vers la page d'accueil
  }else if($uri == "/wall"){
    include 'traitement_id.php';
    // Je renvoie vers le fichier de traitement de l'id qui redirige vers la page wall selon l'id de l'user
  }else if($uri == "/disconnect"){
    echo '<p align="center" style="color:red;font-size:30px">Vous avez était déconnecter</p>';
    header( "Refresh:1; url=/");
    // Je renvoie un message et 1 seconde apres je renvois
    //vers la page d'accueil et je stop la session en cours
  }else if($uri == "/add"){
    echo "Ajout d'un nouveau tweet";
    // J'ajoute une nouvelle ligne dans la table Tweet avec toute les données pour le tweet
  }else if($uri == "/delete"){
    echo "Suppression d'un tweet";
    // Je supprime la ligne du tweet par rapport a son ID
  }else if($uri == "/like"){
    echo "Ajout mention j'aime";
    // J'ajoute +1 au tweet dans la bdd
  }else if($uri == "/retweet"){
    echo "Retweet d'un tweet d'un autre utilisateur";
    // je copie le tweet d'un autre utilisateur et le poste dans la table retweet avec ID de l'user qui le retweet mais avec les info du tweet par rapport a son ID
  }else{
    echo "NULL";
    // Je renvoie NULL
  }
?>
<!-- FIN DE ROUTES -->
