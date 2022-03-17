<?php
/* Smarty version 4.1.0, created on 2022-03-17 13:01:23
  from '/var/www/html/SITE/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623323137ead42_42133115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6df84bd49ea37955131f1ee751d78613e9ccd87' => 
    array (
      0 => '/var/www/html/SITE/templates/menu.tpl',
      1 => 1647518482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623323137ead42_42133115 (Smarty_Internal_Template $_smarty_tpl) {
?><div >

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Les Acupuncteurs Lyonnais</a>
    </div>
    <ul class="nav navbar-nav">
      <li>    <a href="/SITE/index_smarty.php?page=index" >          Acceuil                 </a>    </li>
      <li>    <a href="/SITE/index_smarty.php?page=page_filtree" >   Recherche filtrée       </a>    </li>
      <li>    <a href="/SITE/index_smarty.php?page=mot_clef" >       Recherche par mot-clef  </a>    </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if ($_smarty_tpl->tpl_vars['issetUsr']->value) {?>
      <li>
            <div class="dropdown">
                <button class="dropbtn">Bonjour <?php echo $_smarty_tpl->tpl_vars['msg_co']->value;?>
</button>
                <div class="dropdown-content">
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#change_password">
                          <a href="/SITE/landing.php">Changer mon mot de passe </a>
                        </button>
                </div>
              </div>
      </li>
          <li><a href="deconnexion.php"><span class="glyphicon glyphicon-log-in"></span> Déconnexion</a></li>
      <?php } else { ?>
        <li><a href="/SITE/connexion.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="/SITE/inscription.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <?php }?>
      <li>    <a href="/SITE/index_smarty.php?page=Contact" >        Contact                 </a>    </li>
    </ul>
  </div>
</nav>  
</div><?php }
}
