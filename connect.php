<!-- CONNECTION A LA BASE DE DONNEE -->
<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=extwitter;charset=utf8', 'root', ';');
} catch (Exception $e) {
    die('Erreur !: ' .$e->getMessage());
}
  ?>
