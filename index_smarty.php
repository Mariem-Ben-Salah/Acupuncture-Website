<?php
// Note : Smarty a un 'S' majuscule
require_once("smarty-4.1.0/libs/Smarty.class.php");

$Smarty = new Smarty();

$Smarty->setTemplateDir('templates/');
$Smarty->setCompileDir('templates_c/');
$Smarty->setConfigDir('configs/');
$Smarty->setCacheDir('cache/');


//connection BD

//$user = "tidal@tidal.tidal";
//$passwd = "tidal!";

$user = 'pgtidal';
$passwd = 'tidal';

$dbh = new PDO("pgsql:host=localhost;dbname=acudb",$user,$passwd);

//recuperer les d

//$sql =" SELECT * FROM patho WHERE mer = :codeMeridien ; ";

$sql =" SELECT * FROM patho ;";

$sth = $dbh->prepare( $sql );
$sth->execute();
//$sth->execute(array(':codeMeridien' => 'P'));


//$pathos = $sth->fetchAll(PDO::FETCH_ASSOC);
$pathos = $sth->fetchAll(PDO::FETCH_OBJ);




//$pathos = array("patho1", "patho2", "patho3");
//$Smarty -> assign("pathos" , $pathos);


/*for ($i=0; $i<5; $i++) {
    $
    } 
*/


//echo $data[0]->desc;

$Smarty -> assign("pathos" , $pathos);

// session_start();

// $_SESSION['index']='index';

$Smarty -> display("templates/index.tpl");

//var_dump($pathos);

?>