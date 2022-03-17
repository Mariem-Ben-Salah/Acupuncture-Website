<?php
/* Smarty version 4.1.0, created on 2022-03-17 10:59:26
  from '/var/www/html/SITE/templates/menu_co.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6233067e6861c9_55586241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d96cadf40b04997d233dd808be136ed2754c7de' => 
    array (
      0 => '/var/www/html/SITE/templates/menu_co.tpl',
      1 => 1647510180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6233067e6861c9_55586241 (Smarty_Internal_Template $_smarty_tpl) {
?><div >

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Les Acupuncteurs Lyonnais</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active">    <a href="/SITE/index_smarty.php?page=index" >          Acceuil                 </a>    </li>
      <li>    <a href="/SITE/index_smarty.php?page=page_filtree" >   Recherche filtrée       </a>    </li>
      <li>    <a href="/SITE/index_smarty.php?page=mot_clef" >       Recherche par mot-clef  </a>    </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/SITE/inscription.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="deconnexion.php"><span class="glyphicon glyphicon-log-in"></span> Déconnexion</a></li>
      <h1 class="p-5">Bonjour <?php echo '<?php'; ?>
 echo $data['pseudo']; <?php echo '?>'; ?>
 !</h1>
      <li>    <a href="/SITE/index_smarty.php?page=Contact" >        Contact                 </a>    </li>
    </ul>
  </div>
</nav>  
</div><?php }
}
