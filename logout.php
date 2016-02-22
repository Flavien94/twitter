<!-- DECONNEXION -->
<?php
session_start();//Je demarre la session
$_SESSION = array();
session_destroy();// je la detruis
header('Location:disconnect');// puis je redirige vers disconnect
 ?>
 <!-- FIN-DECONNEXION -->
