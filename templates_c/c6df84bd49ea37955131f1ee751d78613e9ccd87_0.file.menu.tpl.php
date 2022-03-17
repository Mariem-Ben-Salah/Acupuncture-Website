<?php
<<<<<<< HEAD
/* Smarty version 4.1.0, created on 2022-03-17 12:09:50
=======
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 4.1.0, created on 2022-03-17 10:06:39
=======
<<<<<<< HEAD
/* Smarty version 4.1.0, created on 2022-03-14 19:45:29
=======
/* Smarty version 4.1.0, created on 2022-03-14 19:59:50
>>>>>>> 518c115b8539d26779ff140d11781f9aa23aa7c7
>>>>>>> 9af2163ee3b96ff3c248100a26ef5b21537b8891
=======
/* Smarty version 4.1.0, created on 2022-03-17 10:42:57
>>>>>>> b14235c9b6b9f99c5f25e9eb2ed0e3d0df69ce2c
>>>>>>> 548b9d1edef68f265906fd703012cbf1b8ea6367
  from '/var/www/html/SITE/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
<<<<<<< HEAD
  'unifunc' => 'content_623316fe0e4c89_29199902',
=======
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_6232fa1f1046b1_69631902',
=======
<<<<<<< HEAD
  'unifunc' => 'content_622f8d490e26a4_57896060',
=======
  'unifunc' => 'content_622f90a6e92757_57180982',
>>>>>>> 518c115b8539d26779ff140d11781f9aa23aa7c7
>>>>>>> 9af2163ee3b96ff3c248100a26ef5b21537b8891
=======
  'unifunc' => 'content_623302a18b5e84_40955205',
>>>>>>> b14235c9b6b9f99c5f25e9eb2ed0e3d0df69ce2c
>>>>>>> 548b9d1edef68f265906fd703012cbf1b8ea6367
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6df84bd49ea37955131f1ee751d78613e9ccd87' => 
    array (
      0 => '/var/www/html/SITE/templates/menu.tpl',
<<<<<<< HEAD
      1 => 1647515387,
=======
      1 => 1647507166,
>>>>>>> 548b9d1edef68f265906fd703012cbf1b8ea6367
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_623316fe0e4c89_29199902 (Smarty_Internal_Template $_smarty_tpl) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
function content_6232fa1f1046b1_69631902 (Smarty_Internal_Template $_smarty_tpl) {
=======
<<<<<<< HEAD
function content_622f8d490e26a4_57896060 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_622f90a6e92757_57180982 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 518c115b8539d26779ff140d11781f9aa23aa7c7
>>>>>>> 9af2163ee3b96ff3c248100a26ef5b21537b8891
=======
function content_623302a18b5e84_40955205 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> b14235c9b6b9f99c5f25e9eb2ed0e3d0df69ce2c
>>>>>>> 548b9d1edef68f265906fd703012cbf1b8ea6367
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
      <?php if ($_smarty_tpl->tpl_vars['issetUsr']->value) {?>
        <li > <a>Bonjour <?php echo $_smarty_tpl->tpl_vars['msg_co']->value;?>
</a></li>
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
