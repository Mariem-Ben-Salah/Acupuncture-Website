<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

session_start();
require_once 'config.php'; // On inclu la connexion à la bdd

if ($_POST['password']==$_POST['password_retype'])
{

    $email = $_SESSION['email'];

    echo $email; 
    $pass_hache=$_POST['password'];
    $req = $bdd->prepare('UPDATE utilisateurs SET password=? WHERE email = ?');
    $req->execute(array(
    'pwd ' => $_POST['password'],
    'mail' => $email
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