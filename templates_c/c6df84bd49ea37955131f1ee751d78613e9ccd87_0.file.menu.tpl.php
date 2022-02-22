<?php
/* Smarty version 4.1.0, created on 2022-02-22 12:35:21
  from '/var/www/html/SITE/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6214ca79610790_01583180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6df84bd49ea37955131f1ee751d78613e9ccd87' => 
    array (
      0 => '/var/www/html/SITE/templates/menu.tpl',
      1 => 1645529683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6214ca79610790_01583180 (Smarty_Internal_Template $_smarty_tpl) {
?>
    
    
    <div >
        <ul class="navigation"> 

            <li ><a href="/SITE/redirection.php" onclick=" <?php echo '<?php'; ?>
 $_SESSION['index'] = 'index' <?php echo '?>'; ?>
" > Acceuil</a></li>
            <li ><a href="/SITE/redirection.php" onclick=" <?php echo '<?php'; ?>
 $_SESSION['index'] = 'page_filtree' <?php echo '?>'; ?>
" > Recherche filtrée</a></li>
            <li ><a href="/SITE/redirection.php" onclick=" <?php echo '<?php'; ?>
 $_SESSION['index'] = 'Contact' <?php echo '?>'; ?>
" > Contact</a></li>
            <li ><a href="/SITE/redirection.php" onclick=" <?php echo '<?php'; ?>
 $_SESSION['index'] = 'mot_clef' <?php echo '?>'; ?>
" > Recherche par mot-clef</a></li>

            <li><button class="boutonCnx" onclick="document.getElementById('id01').style.display='block'">Se connecter</button></li>
            <li id="bonjour" class="bonjour"></li>
        </ul>
    </div>
<?php }
}
