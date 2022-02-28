<?php
/* Smarty version 4.1.0, created on 2022-02-28 11:57:16
  from '/var/www/html/SITE/templates/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_621caa8c2f8616_59087347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2cc3a186c93c4bb0756c5d1debfc4ee1b9e72ae' => 
    array (
      0 => '/var/www/html/SITE/templates/form.tpl',
      1 => 1646045835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_621caa8c2f8616_59087347 (Smarty_Internal_Template $_smarty_tpl) {
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

            <button type="submit" value="clique" name="mon_button"> mon_button </button>
            <button type="submit" value="clique2" name="mon_button2"> mon_button2 </button>
            <br>

            <?php echo "click = ";?>

            <?php echo $_smarty_tpl->tpl_vars['click']->value;?>

            <br>
            <?php echo "click2 = ";?>

            <?php echo $_smarty_tpl->tpl_vars['click2']->value;?>


        </form>

    </body>

<?php echo '<script'; ?>
 src="js/test_form.js"><?php echo '</script'; ?>
>
</html><?php }
}
