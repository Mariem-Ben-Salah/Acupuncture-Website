<!DOCTYPE html>
<html lang="fr">
    
  {include file='head.tpl'}

  <body class = "corps">

    {include file='menu.tpl'}
    
    <p id="phrase">Consultez les symptômes des principales pathologies traitées chez nous: </p>

    <div class="liste" id = "patho">
        
      {foreach $pathos AS $patho}
        <h3> Pathologie n° {strval($patho->idp)} </h3>
        <p> Description: </p>
        <p> {$patho->desc} </p>
      {/foreach}
    
    </div>

    {include file='footer.tpl'}

  </body>

</html>