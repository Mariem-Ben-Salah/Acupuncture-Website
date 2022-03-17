<?php
// Note : Smarty a un 'S' majuscule
require_once("smarty-4.1.0/libs/Smarty.class.php");
require_once 'config.php'; // ajout connexion bdd 

$Smarty = new Smarty();

$Smarty->setTemplateDir('templates/');
$Smarty->setCompileDir('templates_c/');
$Smarty->setConfigDir('configs/');
$Smarty->setCacheDir('cache/');

// -----------------------------------PHP dans tpl------------------------------------------
session_start();
$Smarty -> assign('issetUsr',isset($_SESSION['user']) );

$req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
$req->execute(array($_SESSION['user']));
$data = $req->fetch();
$Smarty -> assign ('msg_co',  $data['pseudo']);

//----------------------------------connection BD--------------------------------------------

//$user = "tidal@tidal.tidal";
//$passwd = "tidal!";

$user = 'pgtidal';
$passwd = 'tidal';

$dbh = new PDO("pgsql:host=localhost;dbname=acudb",$user,$passwd);



//----------------------------------recuperer les Données--------------------------------------------

//$sql =" SELECT * FROM patho WHERE mer = :codeMeridien ; ";
$sql =" SELECT * FROM patho ;";
$sth = $dbh->prepare( $sql );
$sth->execute();
//$sth->execute(array(':codeMeridien' => 'P'));
//$pathos = $sth->fetchAll(PDO::FETCH_ASSOC);
$pathos = $sth->fetchAll(PDO::FETCH_OBJ);
//$Smarty -> assign("pathos" , $pathos);



//-----------------------------------recuperer les Données Filtrées--------------------------------------------

$sql_filtre = " SELECT * FROM patho " ;

$ok = isset($_POST['filtre_mer']);
$ok2 = isset($_POST['filtre_type']);

if(isset($_POST['filtre_mer'])){
    $sql_filtre = $sql_filtre . "WHERE mer = " . $_POST['filtre_mer'] ;
}

if(isset($_POST['filtre_type'])){
    if($ok){
        $sql_filtre = $sql_filtre . " AND type LIKE '%" . $_POST['filtre_type'] ."'" ;
    }
    else{
        $sql_filtre = $sql_filtre . " WHERE type LIKE '%" . $_POST['filtre_type'] ."'" ;
    }
}

$List_cara=array();

if (isset($_POST['filtre_car_p'])){array_push($List_cara, $_POST['filtre_car_p']);}
if (isset($_POST['filtre_car_v'])){array_push($List_cara, $_POST['filtre_car_v']);}
if (isset($_POST['filtre_car_f'])){array_push($List_cara, $_POST['filtre_car_f']);}
if (isset($_POST['filtre_car_c'])){array_push($List_cara, $_POST['filtre_car_c']);}
if (isset($_POST['filtre_car_i'])){array_push($List_cara, $_POST['filtre_car_i']);}
if (isset($_POST['filtre_car_e'])){array_push($List_cara, $_POST['filtre_car_e']);}


if(!empty($List_cara)){
    if($ok2 or $ok){
        foreach ($List_cara as $cara ){
            $sql_filtre = $sql_filtre . " AND type LIKE '%" . $cara . "%'";
        }

    }
    else {
        foreach ($List_cara as $cara ){
            $sql_filtre = $sql_filtre . " WHERE type LIKE '%" . $cara . "%'";
        }

    }
}

$sql_filtre = $sql_filtre . ";";

echo $sql_filtre;

$sth_filtre = $dbh->prepare( $sql_filtre );
$sth_filtre->execute();
$pathos = $sth_filtre->fetchAll(PDO::FETCH_OBJ);

$Smarty -> assign("pathos" , $pathos);

//var_dump($pathos);


if(isset($_GET['page'])){
    if ($_GET['page']=="index"): 
        $Smarty -> display("templates/index.tpl"); 
    elseif ($_GET['page']=="page_filtree"): 
        $Smarty -> display("templates/page_filtree.tpl");
    elseif ($_GET['page']=="Contact"):
        $Smarty -> display("templates/Contact.tpl");
    elseif ($_GET['page']=="mot_clef"):
        $Smarty -> display("templates/mot_clef.tpl");
    endif;
}
else {
    $Smarty -> display("templates/index.tpl");
}



?>

