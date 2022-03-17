<?php
/* Smarty version 4.1.0, created on 2022-03-17 10:06:39
  from '/var/www/html/SITE/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6232fa1f0f6024_67964439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6df8e8dbad4148c37422ccd46c598635989cd043' => 
    array (
      0 => '/var/www/html/SITE/templates/index.tpl',
      1 => 1647285071,
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
function content_6232fa1f0f6024_67964439 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
    
  <?php $_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <body>

    <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <p id="phrase">Consultez les symptômes des principales pathologies traitées chez nous: </p>

    <div class="apropos" id = "patho">
        
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pathos']->value, 'patho');
$_smarty_tpl->tpl_vars['patho']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
$_smarty_tpl->tpl_vars['patho']->do_else = false;
?>
        <h3> Patho n° <?php echo strval($_smarty_tpl->tpl_vars['patho']->value->idp);?>
 </h3>
        <p> desc : <?php echo $_smarty_tpl->tpl_vars['patho']->value->desc;?>
 </p>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </body>

</html><?php }
}
