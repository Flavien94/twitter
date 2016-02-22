<?php
session_start();
include 'connect.php';
$id = $_SESSION['id'];
$reqtweet = $bdd->prepare("SELECT * FROM tweet WHERE id_user = ?");
$reqtweet->execute(array($id));
$tweetinfo = $reqtweet->fetch();
$tweetid = $tweetinfo['id'];
$tweetcontent = $tweetinfo['content'];
$tweetpost = $_POST['tweet'];
echo $tweetcontent;
// if ($userid == $id AND $usercontent == $userpost ) {
// $delete = $bdd->prepare("DELETE FROM tweet WHERE id_user = ?");
// $delete->execute(array($id));
// header('Location:wall');
// }
// else {
//   echo 'Vous ne pouvez pas supprimez ce tweet';
//   header( "Refresh:1; url=/wall");
// }
 ?>
