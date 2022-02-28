<?php
/* Smarty version 4.1.0, created on 2022-02-28 11:14:12
  from '/var/www/html/SITE/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_621ca074b1f2f7_42480522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6df84bd49ea37955131f1ee751d78613e9ccd87' => 
    array (
      0 => '/var/www/html/SITE/templates/menu.tpl',
      1 => 1646042279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621ca074b1f2f7_42480522 (Smarty_Internal_Template $_smarty_tpl) {
?><div >

    <ul class="navigation"> 

        <li>    <a href="/SITE/index_smarty.php?page=index" >          Acceuil                 </a>    </li>
        <li>    <a href="/SITE/index_smarty.php?page=page_filtree" >   Recherche filtrée       </a>    </li>
        <li>    <a href="/SITE/index_smarty.php?page=Contact" >        Contact                 </a>    </li>
        <li>    <a href="/SITE/index_smarty.php?page=mot_clef" >       Recherche par mot-clef  </a>    </li>

        <li><button class="boutonCnx" onclick="document.getElementById('id01').style.display='block'">Se connecter</button></li>

        <li id="bonjour" class="bonjour"></li>

    </ul>

</div>
<?php }
}
