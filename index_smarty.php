<?php
// Note : Smarty a un 'S' majuscule
require_once("smarty-4.1.0/libs/Smarty.class.php");

$Smarty = new Smarty();

$Smarty->setTemplateDir('templates/');
$Smarty->setCompileDir('templates_c/');
$Smarty->setConfigDir('configs/');
$Smarty->setCacheDir('cache/');


//----------------------------------connection BD--------------------------------------------

//$user = "tidal@tidal.tidal";
//$passwd = "tidal!";

$user = 'pgtidal';
$passwd = 'tidal';

$dbh = new PDO("pgsql:host=localhost;dbname=acudb",$user,$passwd);



//-----------------------------------recuperer les Données--------------------------------------------

// //$sql =" SELECT * FROM patho WHERE mer = :codeMeridien ; ";

// $sql =" SELECT * FROM patho ;";

// $sth = $dbh->prepare( $sql );
// $sth->execute();
// //$sth->execute(array(':codeMeridien' => 'P'));

// //$pathos = $sth->fetchAll(PDO::FETCH_ASSOC);
// $pathos = $sth->fetchAll(PDO::FETCH_OBJ);

// $Smarty -> assign("pathos" , $pathos);



//-----------------------------------recuperer les Données Filtrées--------------------------------------------


$sql_filtre = " SELECT * FROM pathos " ;

$ok = TRUE;

if(isset($_GET['filtre_mer'])){
    $sql_filtre = $sql_filtre . "WHERE mer =" . $_GET['filtre_mer'] ;
    $ok = FALSE;
}

if(isset($_GET['filtre_type'])){
    if($ok){
        $sql_filtre = $sql_filtre . "WHERE type =" . $_GET['filtre_type'] ;
    }
    else{
        $sql_filtre = $sql_filtre . " AND type =" . $_GET['filtre_type'] ;
    }
}

// $_GET['my_value'] = "test";

$sql_filtre = $sql_filtre . ";" ;

echo $sql_filtre;


if(isset($_GET['filtre_mer'])){

    $sql_filtre_mer =" SELECT * FROM patho WHERE mer = :code ;";
    $sth_filtre_mer = $dbh->prepare( $sql_filtre_mer );
    $sth_filtre_mer->execute(array(':code' => $_GET['filtre_mer']));
    $pathos = $sth_filtre_mer->fetchAll(PDO::FETCH_OBJ);
}
else {
    $sql =" SELECT * FROM patho ;";
    $sth = $dbh->prepare( $sql );
    $sth->execute();
    $pathos = $sth->fetchAll(PDO::FETCH_OBJ);
}

$Smarty -> assign("pathos" , $pathos);


// elseif(isset($_GET['filtre_type'])){
//     $sql_filtre_type =" SELECT * FROM patho WHERE type = :code ;";
//     $sth_filtre_type = $dbh->prepare( $sql_filtre_type );
//     $sth_filtre_type->execute(array(':code' => $_GET['filtre_mer']));
//     $pathos = $sth_filtre_type->fetchAll(PDO::FETCH_OBJ);
// }
// elseif(isset($_GET['filtre_symp'])){
//     $sql_filtre_symp =" SELECT * FROM patho WHERE mer = :code ;";
//     $sth_filtre_symp = $dbh->prepare( $sql_filtre_symp );
//     $sth_filtre_symp -> execute(array(':code' => $_GET['filtre_mer']));
//     $pathos = $sth_filtre_symp->fetchAll(PDO::FETCH_OBJ);
// }



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