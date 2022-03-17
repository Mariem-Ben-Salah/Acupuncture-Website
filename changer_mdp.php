<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
try {
    $bdd = new PDO("pgsql:host=localhost;dbname=acudb","pgtidal", "tidal");
 }
 catch (Exception $e) {
die('Erreur : ' . $e->getMessage());
}
session_start();
if ($_POST['password']==$_POST['password_retype'])
{
$pass_hache=sha1($_POST['password']);
$req = $bdd->prepare('UPDATE utilisateurs SET password=? WHERE pseudo = ?');
$req->execute(array(
$pass_hache,
$_SESSION['pseudo']
));
 
echo '<p>La modification de mot de passe a été prise en compte ! Déconnectez-vous et reconnectez-vous afin de valider ce changement.</p><br/>';
?>
<a href='index_smarty.php'>Retour à la page membre</a>
<?php
}
else{
echo'Vous n\'avez pas tapé deux fois le même mot de passe';
 
}
 
?>