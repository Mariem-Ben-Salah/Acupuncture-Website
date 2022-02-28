<?php
/* Smarty version 4.1.0, created on 2022-02-28 08:41:56
  from '/var/www/html/SITE/templates/Contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_621c7cc4e70de3_67820240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f441f396347e68f9d694c5e27967debb7f4f9ca1' => 
    array (
      0 => '/var/www/html/SITE/templates/Contact.tpl',
      1 => 1646032143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_621c7cc4e70de3_67820240 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<?php $_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="scroll_to_top">
    <a href="#top"><img src="../Images/fleche.png"  alt="Retourner en haut" /></a>
</div>
</head>

<body onload="appelAPI()">

    <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1>Contact</h1>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
