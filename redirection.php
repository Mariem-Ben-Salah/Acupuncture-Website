<?php

require_once("smarty-4.1.0/libs/Smarty.class.php");

$Smarty = new Smarty();
if ($_SESSION['index']=="index"){ $Smarty -> display("templates/index.tpl"); }
elseif ($_SESSION['index']=="page_filtree"){ $Smarty -> display("templates/page_filtree.tpl"); }
elseif ($_SESSION['index']=="Contact"){ $Smarty -> display("templates/Contact.tpl"); }
else ($_SESSION['index']=="mot_clef"){ $Smarty -> display("templates/mot_clef.tpl") }
    

?>