<?php
<<<<<<< HEAD
/* Smarty version 4.1.0, created on 2022-03-17 10:08:51
=======
/* Smarty version 4.1.0, created on 2022-03-17 09:30:01
>>>>>>> 9af2163ee3b96ff3c248100a26ef5b21537b8891
  from '/var/www/html/SITE/templates/page_filtree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
<<<<<<< HEAD
  'unifunc' => 'content_6232faa3b48418_93983208',
=======
  'unifunc' => 'content_6232f189f0a5e4_51539680',
>>>>>>> 9af2163ee3b96ff3c248100a26ef5b21537b8891
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7af76e34403aeaf058d882baaeb62c06f17e68d9' => 
    array (
      0 => '/var/www/html/SITE/templates/page_filtree.tpl',
<<<<<<< HEAD
      1 => 1647285255,
=======
      1 => 1647505258,
>>>>>>> 9af2163ee3b96ff3c248100a26ef5b21537b8891
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
<<<<<<< HEAD
function content_6232faa3b48418_93983208 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6232f189f0a5e4_51539680 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9af2163ee3b96ff3c248100a26ef5b21537b8891
?><!DOCTYPE html>
<html lang="fr">

    <?php $_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <body>

        <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <h1>PAGE FILTRE</h1>

        <form id="myBtnContainer" class="btnContainer" action="index_smarty.php?page=page_filtree" method="POST">
            
            <a class="a_filtre" href="index_smarty.php?page=page_filtree"> Afficher tout</a>
            
            <br>
            <h2>Filtrez par Meridien </h2>
            <br>
            P      
            <input class ="P"   type="checkbox"  name="filtre_mer"  onclick="onlyOne(this)" value="P">  <br>
            GI     
            <input class ="GI"  type="checkbox"  name="filtre_mer"  onclick="onlyOne(this)" value="GI">  <br> 
            E      
            <input class ="E"   type="checkbox"  name="filtre_mer"  onclick="onlyOne(this)" value="E">   <br>
            Rte    
            <input class ="Rte" type="checkbox"  name="filtre_mer"  onclick="onlyOne(this)" value="Rte">  <br>
            <br>

  
            <h2> Filtrez par Type </h2>
            <br>
            me      
            <input class ="P"   type="checkbox"  name="filtre_type"  onclick="onlyOne2(this)" value="me">  <br>    
            mi      
            <input class ="P"   type="checkbox"  name="filtre_type"  onclick="onlyOne2(this)" value="mi">  <br>   
            lp      
            <input class ="P"   type="checkbox"  name="filtre_type"  onclick="onlyOne2(this)" value="lp">  <br>   
            lv      
            <input class ="P"   type="checkbox"  name="filtre_type"  onclick="onlyOne2(this)" value="lv">  <br>    
            <br>   


            <h2> Filtrez par Caracteristiques </h2>
            <br>
            Plein     
            <input class ="P"   type="checkbox"  name="filtre_type" value="p">  <br>    
            Chaud   
            <input class ="P"   type="checkbox"  name="filtre_type" value="c">  <br>   
            Vide   
            <input class ="P"   type="checkbox"  name="filtre_type" value="v">  <br>   
            Froid    
            <input class ="P"   type="checkbox"  name="filtre_type" value="f">  <br>    
            Interne   
            <input class ="P"   type="checkbox"  name="filtre_type"  value="i">  <br>   
            Externe  
            <input class ="P"   type="checkbox"  name="filtre_type"  value="e">  <br> 
            <br>


            <button type="submit" name="submit_button"> submit </button>
        </form> 

        <div class="apropos">

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
    <?php echo '<script'; ?>
 src="js/test_form.js"><?php echo '</script'; ?>
>
</html><?php }
}
