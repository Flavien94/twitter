<?php
$reponse = $bdd->query('SELECT * FROM tweet ORDER BY id DESC;');
//je selectionne les id dans l'ordre descendant de la table tweet
 while ($donnees = $reponse->fetch()) {
?>

 <h4><?php echo  $donnees['login_user'] ?></h4>
<h6>@<?php echo $donnees['login_user'] ?></h6>
<p class="tweet"><?php echo $donnees['content'] ?></p>
<a href="delete.php">Suprimer</a>
<!-- <img src="tweet.png" alt="" />
<img class="photo" src="pp.png" alt="" /> -->

<?php
} //fin du while
?>
