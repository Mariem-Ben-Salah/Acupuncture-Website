<?php
/* Smarty version 4.1.0, created on 2022-02-11 11:40:32
  from '/var/www/html/SITE/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62063d20e25db6_81807444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6df84bd49ea37955131f1ee751d78613e9ccd87' => 
    array (
      0 => '/var/www/html/SITE/templates/menu.tpl',
      1 => 1644575463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62063d20e25db6_81807444 (Smarty_Internal_Template $_smarty_tpl) {
?>
    
    
    <div >
        <ul class="navigation"> 
            <li ><a href="/var/www/html/SITE/html/Index.php">Accueil</a></li>
            <li ><a href="/var/www/html/SITE/html/Contact.php">Contact</a></li>
            <li ><a href="/var/www/html/SITE/html/page_filtree.php">Recherche filtrée</a></li>
            <li ><a href="/var/www/html/SITE/html/mot_clef.php">Recherche par mot-clef</a></li>
            <li><button class="boutonCnx" onclick="document.getElementById('id01').style.display='block'">Se connecter</button></li>
            <li id="bonjour" class="bonjour"></li>
        </ul>
    </div><?php }
}
