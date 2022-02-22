
    
    
    <div >
        <ul class="navigation"> 

            <li ><a href="/SITE/redirection.php" onclick=" <?php $_SESSION['index'] = 'index' ?>" > Acceuil</a></li>
            <li ><a href="/SITE/redirection.php" onclick=" <?php $_SESSION['index'] = 'page_filtree' ?>" > Recherche filtrée</a></li>
            <li ><a href="/SITE/redirection.php" onclick=" <?php $_SESSION['index'] = 'Contact' ?>" > Contact</a></li>
            <li ><a href="/SITE/redirection.php" onclick=" <?php $_SESSION['index'] = 'mot_clef' ?>" > Recherche par mot-clef</a></li>

            <li><button class="boutonCnx" onclick="document.getElementById('id01').style.display='block'">Se connecter</button></li>
            <li id="bonjour" class="bonjour"></li>
        </ul>
    </div>
