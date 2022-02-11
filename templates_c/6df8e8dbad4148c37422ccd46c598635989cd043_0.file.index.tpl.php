<?php
/* Smarty version 4.1.0, created on 2022-02-11 11:43:06
  from '/var/www/html/SITE/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62063dba5e7ed0_35160576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6df8e8dbad4148c37422ccd46c598635989cd043' => 
    array (
      0 => '/var/www/html/SITE/templates/index.tpl',
      1 => 1644576177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62063dba5e7ed0_35160576 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head onload="ville()">
<title>Les Acupuncteurs Lyonnais</title>

<link rel="icon" type="image/png" sizes="16x16" href="/var/www/html/SITE/Images/favicon-16x16.png">
<link rel="stylesheet" href="/var/www/html/SITE/css/style.css"/>
<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/248965cc4b.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>


<div id="scroll_to_top">
    <a href="#top"><img src="/var/www/html/SITE/Images/fleche.png"  alt="Retourner en haut" /></a>
</div>
</head>

<body onload="appelAPI()">

     <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 id="destination">Les Acupuncteurs Lyonnais</h1>

<h2>Consultez les symptômes des principales pathologies traitées chez nous: </h2>

<div class="apropos" id = "patho">
    
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pathos']->value, 'patho');
$_smarty_tpl->tpl_vars['patho']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
$_smarty_tpl->tpl_vars['patho']->do_else = false;
?>
            <li>
                <?php echo $_smarty_tpl->tpl_vars['patho']->value;?>

            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

  <br>
  <br>

  <?php echo '<script'; ?>
 type="text/javascript">
  function toggle_text(id) {
    
    var span = document.getElementById(id);
    if(span.style.display == "none") {
      span.style.display = "inline";
    } else {
      span.style.display = "none";
    }
  }
  <?php echo '</script'; ?>
> <br>

</div>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

 
  <form class="modal-content animate" >

    <div class="container1">
      <p>Connectez-vous!</p>
      <div>
        <label for="uname">Email ou téléphone</label>
        <br>
        <input id="coname" type="text" placeholder="ex: nom@gmail.com" name="uname" required>
      </div>

      <div>
       <label for="psw" >Mot de passe</label>
       <br>
       <input id="copass" type="password" placeholder="Entrez mot de passe" name="psw" required>
      </div>
    </div>

 
    <div class="container2" >   
      <div>
       <button class="boutonForm" type="button" class="cancelbtn" onclick="hello(), document.getElementById('id01').style.display='none'" >Connexion</button>
       <br>
       <label>
         <input type="checkbox" checked="checked" name="remember"> Rester connecté
       </label>
       <br>
      </div>
      <button class="boutonForm" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
      <br>
      <div class="forgotPsw">
        <a href="#"><span class="psw">Mot de passe oublié?</span></a>
      </div>
    </div>

  </form>
</div>


</body>

<?php echo '<script'; ?>
 src="/var/www/html/SITE/js/script.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
