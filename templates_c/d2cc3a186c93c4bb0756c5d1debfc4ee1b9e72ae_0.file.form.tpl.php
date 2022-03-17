<?php
/* Smarty version 4.1.0, created on 2022-03-14 19:22:12
  from '/var/www/html/SITE/templates/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_622f87d40f18e6_77949194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2cc3a186c93c4bb0756c5d1debfc4ee1b9e72ae' => 
    array (
      0 => '/var/www/html/SITE/templates/form.tpl',
      1 => 1647282110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_622f87d40f18e6_77949194 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

    <?php $_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <body>

        <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <form action="test_form.php" method="GET">



            <input type="checkbox" name="check" onclick="onlyOne(this)">
            <input type="checkbox" name="check" onclick="onlyOne(this)">
            <input type="checkbox" name="check" onclick="onlyOne(this)">
            <input type="checkbox" name="check" onclick="onlyOne(this)">
            <br>

            <button type="submit" name="mon_button"> submit </button>

            <br>

            <?php echo "click = ";?>

            <?php echo $_smarty_tpl->tpl_vars['click']->value;?>


        </form>

    </body>

<?php echo '<script'; ?>
 src="js/test_form.js"><?php echo '</script'; ?>
>
</html><?php }
}
