
<?php
session_start();//Je demarre la session
include 'connect.php';//j'include le ficher de connection a la base de donnée
header('Location:wall.php?id='.$_SESSION['id']);
//je redirige vers la page wall.php
 ?>
