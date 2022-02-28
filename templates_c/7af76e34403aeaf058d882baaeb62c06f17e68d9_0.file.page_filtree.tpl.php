<?php
/* Smarty version 4.1.0, created on 2022-02-28 10:45:50
  from '/var/www/html/SITE/templates/page_filtree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_621c99cee81d61_58792173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7af76e34403aeaf058d882baaeb62c06f17e68d9' => 
    array (
      0 => '/var/www/html/SITE/templates/page_filtree.tpl',
      1 => 1646041550,
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
function content_621c99cee81d61_58792173 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">


<?php $_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body>

    <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1>PAGE FILTRE</h1>


    <div id="myBtnContainer" class="btnContainer">
        
        <a class="a_filtre" href="index_smarty.php?page=page_filtree"> Afficher tout</a>
        
        <div>
            <h2>Filtrez par Meridien <br>
                <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=P">     P       </a> 
                <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=GI">    GI      </a>
                <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=E">     E       </a> 
                <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=Rte">   Rte     </a>
            </h2> <br>

            <br>    
        </div>  

        <div>   
            <h2> Filtrez par Type <br>
                <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_type=me">   me      </a>     
                <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_type=mi">   mi      </a> 
                <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_type=lp">   lp      </a> 
                <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_type=lv">   lv      </a> 
            </h2> <br>   

        </div>

        <div>
            <h2> Filtrez par Caracteristiques <br>
                <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=P">     Plein   </a> 
                <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=P">     Chaud   </a> 
                <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=P">     Vide    </a>
                <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=P">     Froid   </a> 
                <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=P">     Interne </a>
                <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=P">     Externe </a>
            </h2> <br>

        </div>

    </div> 

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
</html><?php }
}
