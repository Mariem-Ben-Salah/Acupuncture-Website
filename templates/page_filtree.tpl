<!DOCTYPE html>
<html lang="fr">


{include file='head.tpl'}


<body>

    {include file='menu.tpl'}

    <h1>PAGE FILTRE</h1>


    <div id="myBtnContainer" class="btnContainer">
        
        <a href="index_smarty.php?page=page_filtree"> Afficher tout</a>
        
        <div>
            <p>Filtrez par meridien:</p> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> P</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=GI"> GI </a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=E"> E </a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=Rte"> Rte </a> <br>
            <br>
        </div>

        <div>
            <p>Filtrez par type de pathologie:</p> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Meridien</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Organe/viscère</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Luo</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Merveilleux vaisseau</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Jing jin</a> <br>
        </div>

        <div>
            <p>href="index_smarty.php?page=pagefiltree&filtre_mer=P" filtrez par les caracteristiques des pathologies:</p> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Plein</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Chaud</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Vide</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Froid</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Interne</a> <br>
            <a href="index_smarty.php?page=page_filtree&filtre_mer=P"> Externe</a> <br> <br>
        </div>

    </div> 

    <div class="apropos" id = "patho">
        {foreach $pathos AS $patho}
            <h3> Patho n° {strval($patho->idp)} </h3>
            <p> desc : {$patho->desc} </p>
        {/foreach}
    <div>



{include file='footer.tpl'}

</body>
</html>