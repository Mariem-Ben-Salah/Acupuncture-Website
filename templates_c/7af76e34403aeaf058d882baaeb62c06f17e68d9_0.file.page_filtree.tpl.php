<?php
/* Smarty version 4.1.0, created on 2022-02-22 12:11:20
  from '/var/www/html/SITE/templates/page_filtree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6214c4d8b23034_81060261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7af76e34403aeaf058d882baaeb62c06f17e68d9' => 
    array (
      0 => '/var/www/html/SITE/templates/page_filtree.tpl',
      1 => 1645528277,
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
function content_6214c4d8b23034_81060261 (Smarty_Internal_Template $_smarty_tpl) {
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

    <h1>PAGE FILTRE</h1>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
