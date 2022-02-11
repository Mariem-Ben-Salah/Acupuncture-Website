<?php
// Note : Smarty a un 'S' majuscule
require_once("smarty-4.1.0/libs/Smarty.class.php");

$Smarty = new Smarty();

$Smarty->setTemplateDir('templates/');
$Smarty->setCompileDir('templates_c/');
$Smarty->setConfigDir('configs/');
$Smarty->setCacheDir('cache/');






/*$pathos = array(
    array(
      title => 'patho1',
      symptomes => 'fievre',
      meridien => 'poumon',
      type => 'meridien',
      caracteristique => 'chaud',
    ),
    array(
        title => 'patho2',
        symptomes => 'maux',
        meridien => 'rein',
        type => 'meridien',
        caracteristique => 'froid',
    ),
    array(
        title => 'patho3',
        symptomes => 'les symptomes',
        meridien => 'rein',
        type => 'meridien',
        caracteristique => 'chaud',
    ),
    array(
        title => 'patho4',
        symptomes => 'les symptomes',
        meridien => 'poumon',
        type => 'orange',
        caracteristique => 'chaud',
    ),
    array(
        title => 'patho5',
        symptomes => 'les symptomes',
        meridien => 'poumon',
        type => 'orange',
        caracteristique => 'froid',
      )
); */

$pathos = array("patho1", "patho2", "patho3");


$Smarty -> assign("pathos" , $pathos);


$Smarty -> display("templates/index.tpl");

?>