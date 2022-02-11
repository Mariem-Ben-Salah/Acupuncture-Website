<?php
// Note : Smarty a un 'S' majuscule
require_once("smarty-4.1.0/libs/Smarty.class.php");

$Smarty = new Smarty();

$Smarty->setTemplateDir('templates/');
$Smarty->setCompileDir('templates_c/');
$Smarty->setConfigDir('configs/');
$Smarty->setCacheDir('cache/');

/*
//connection bd

$user = 'tidal@tidal.tidal';
$passwd = 'tidal!';

$dbh = new PDO('chaine de connexion','$user','$passwd');

//recuperer les d

$sql =" SELECT * FROM patho WHERE mer = :codeMeridien ; ";

$sth = $dbh->prepare( $sql );
$sth->execute(array(':codeMeridien' => 'P'));

$data = $sth->fetchAll();
*/



$pathos = array("patho1", "patho2", "patho3");
$Smarty -> assign("pathos" , $pathos);

$Smarty -> display("templates/index.tpl");

?>