<!DOCTYPE html>
<html lang="fr">
    
  {include file='head.tpl'}

  <body onload="appelAPI()">

    {include file='menu.tpl'}
    

    <h1 id="destination">Les Acupuncteurs Lyonnais</h1>

    <h2>Consultez les symptômes des principales pathologies traitées chez nous: </h2>

    <div class="apropos" id = "patho">
        
      {foreach $pathos AS $patho}
        <h3> Patho n° {strval($patho->idp)} </h3>
        <p> desc : {$patho->desc} </p>
      {/foreach}
    
    </div>

    {include file='footer.tpl'}

  </body>

</html>