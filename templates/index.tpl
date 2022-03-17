<!DOCTYPE html>
<html lang="fr">
    
  {include file='head.tpl'}

  <body>

    {include file='menu.tpl'}
    
    <p id="phrase">Consultez les symptômes des principales pathologies traitées chez nous: </p>

    <div class="apropos" id = "patho">
        
      {foreach $pathos AS $patho}
        <h3> Patho n° {strval($patho->idp)} </h3>
        <p> desc : {$patho->desc} </p>
      {/foreach}
    
    </div>

    {include file='footer.tpl'}

  </body>

</html>