<div >

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
      {if $issetUsr}
      <li>
            <div class="dropdown">
                <button class="dropbtn">Bonjour {$msg_co}</button>
                <div class="dropdown-content">
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#change_password">
                          <a href="/SITE/landing.php">Changer mon mot de passe </a>
                        </button>
                </div>
              </div>
      </li>
          <li><a href="deconnexion.php"><span class="glyphicon glyphicon-log-in"></span> Déconnexion</a></li>
      {else}
        <li><a href="/SITE/connexion.php"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
        <li><a href="/SITE/inscription.php"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>
      {/if}
      <li>    <a href="/SITE/index_smarty.php?page=Contact" >        Contact                 </a>    </li>
    </ul>
  </div>
</nav>  
</div>