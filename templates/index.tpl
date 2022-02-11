<!DOCTYPE html>
<html lang="fr">

<head onload="ville()">
<title>Les Acupuncteurs Lyonnais</title>

<link rel="icon" type="image/png" sizes="16x16" href="/SITE/Images/favicon-16x16.png">
<link rel="stylesheet" href="/SITE/css/style.css"/>
<script src="https://kit.fontawesome.com/248965cc4b.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<div id="scroll_to_top">
    <a href="#top"><img src="/SITE/Images/fleche.png"  alt="Retourner en haut" /></a>
</div>
</head>

<body onload="appelAPI()">

     {include file='menu.tpl'}

<h1 id="destination">Les Acupuncteurs Lyonnais</h1>

<h2>Consultez les symptômes des principales pathologies traitées chez nous: </h2>

<div class="apropos" id = "patho">
    
    <ul>
        {foreach $pathos AS $patho}
            <li>
                {$patho}
            </li>
        {/foreach}
    </ul>

  <br>
  <br>

  <script type="text/javascript">
  function toggle_text(id) {
    
    var span = document.getElementById(id);
    if(span.style.display == "none") {
      span.style.display = "inline";
    } else {
      span.style.display = "none";
    }
  }
  </script> <br>

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

<script src="/var/www/html/SITE/js/script.js"></script>

{include file='footer.tpl'}

</html>