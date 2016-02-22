    <!-- ROUTES -->
    <?php
      $uri = $_SERVER['REQUEST_URI'];
      switch ($uri){
        case '/':
          include 'login.php';
        break;
        case '/signup':
          // J'ajoute une nouvelle ligne dans la table user avec toute les données nécessaire
        break;
        case 'wall':
          include 'traitement_id.php';
        break;
        case '/disconnect':
          echo '<p align="center" style="color:red;font-size:30px">Vous avez était déconnecter</p>';
          header( "Refresh:1; url=/");
          // Je renvoie vers la page d'accueil et je stop la session en cours
        break;
        case '/add':
          echo "Ajout d'un nouveau tweet";
          // J'ajoute une nouvelle ligne dans la table Tweet avec toute les données pour le tweet
        break;
        case '/delete':
          echo "Suppression d'un tweet";
          // Je supprime la ligne du tweet par rapport a son ID
        break;
        case '/like':
          echo "Ajout mention j'aime";
          // J'ajoute +1 au tweet dans la bdd
        break;
        case '/retweet':
          echo "Retweet d'un tweet d'un autre utilisateur";
          // je copie le tweet d'un autre utilisateur et le poste dans la table retweet avec ID de l'user qui le retweet mais avec les info du tweet par rapport a son ID
        break;
      }
    ?>
<!-- FIN DE ROUTES -->
