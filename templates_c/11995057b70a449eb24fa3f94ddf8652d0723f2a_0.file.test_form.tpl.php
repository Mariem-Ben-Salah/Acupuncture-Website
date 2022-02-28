<?php
/* Smarty version 4.1.0, created on 2022-02-28 11:21:46
  from '/var/www/html/SITE/templates/test_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_621ca23a800ff4_70990337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11995057b70a449eb24fa3f94ddf8652d0723f2a' => 
    array (
      0 => '/var/www/html/SITE/templates/test_form.tpl',
      1 => 1646043705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_621ca23a800ff4_70990337 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

    <?php $_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <body>

        <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <form action="test_form.php" method="GET">

            <input type="text" name="nom_input" value="aaaa"/> 

            <button>Submit</button>

            <br>

            <?php echo $_smarty_tpl->tpl_vars['mon_text']->value;?>


        </form>

    </body>

</html><?php }
}
