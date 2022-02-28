<?php
/* Smarty version 4.1.0, created on 2022-02-28 09:23:12
  from '/var/www/html/SITE/templates/page_filtree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_621c8670885113_76603612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7af76e34403aeaf058d882baaeb62c06f17e68d9' => 
    array (
      0 => '/var/www/html/SITE/templates/page_filtree.tpl',
      1 => 1646036590,
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
function content_621c8670885113_76603612 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">


<?php $_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body>

    <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1>PAGE FILTRE</h1>


    <div id="myBtnContainer" class="btnContainer">
        
        <a href="index_smarty.php?page=page_filtree"> Afficher tout</a>
        
        <div>
            <p>Filtrez par meridien:</p> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> P</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=GI"> GI </a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=E"> E </a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=Rte"> Rte </a> <br>
            <br>
        </div>

        <div>
            <p>Filtrez par type de pathologie:</p> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Meridien</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Organe/viscère</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Luo</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Merveilleux vaisseau</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Jing jin</a> <br>
        </div>

        <div>
            <p>href="index_smarty.php?page=pagefiltree&filtre_mer=P" filtrez par les caracteristiques des pathologies:</p> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Plein</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Chaud</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Vide</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Froid</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Interne</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Externe</a> <br> <br>
        </div>

    </div> 

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
    <div>



<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
