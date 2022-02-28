<?php
// Note : Smarty a un 'S' majuscule
require_once("smarty-4.1.0/libs/Smarty.class.php");

$Smarty_form = new Smarty();

$click;
$click2;

if(isset($_GET['mon_button'])){
    $click = $_GET['mon_button'];
}
if(isset($_GET['mon_button2'])){
    $click2 = $_GET['mon_button2'];
}

$Smarty_form -> assign("click", $click);
$Smarty_form -> assign("click2", $click2);

$Smarty_form -> display("templates/form.tpl");

?>