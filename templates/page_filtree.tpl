<!DOCTYPE html>
<html lang="fr">

    {include file='head.tpl'}

    <body>

        {include file='menu.tpl'}

        <h1>PAGE FILTRE</h1>

        <form id="myBtnContainer" class="btnContainer" action="index_smarty.php?page=page_filtree" method="POST">
            
            <a class="a_filtre" href="index_smarty.php?page=page_filtree"> Afficher tout</a>
            
    
            <h2>Filtrez par Meridien </h2>
            <h4>P</h4>      
            <input class ="P"   type="checkbox"  name="filtre_mer"  onclick="onlyOne(this)" value="P">  <br>   
            <h4>GI</h4>     
            <input class ="GI"  type="checkbox"  name="filtre_mer"  onclick="onlyOne(this)" value="GI">  <br>  
            <h4>E</h4>      
            <input class ="E"   type="checkbox"  name="filtre_mer"  onclick="onlyOne(this)" value="E">  <br>   
            <h4>Rte</h4>    
            <input class ="Rte" type="checkbox"  name="filtre_mer"  onclick="onlyOne(this)" value="Rte">  <br>  

            <button type="submit" name="submit_button"> submit </button>

            <div>   
                <h2> Filtrez par Type <br>
                    <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_type=me">   me      </a>     
                    <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_type=mi">   mi      </a> 
                    <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_type=lp">   lp      </a> 
                    <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_type=lv">   lv      </a> 
                </h2> <br>   

            </div>

            <div>
                <h2> Filtrez par Caracteristiques <br>
                    <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=P">     Plein   </a> 
                    <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=P">     Chaud   </a> 
                    <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=P">     Vide    </a>
                    <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=P">     Froid   </a> 
                    <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=P">     Interne </a>
                    <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=P">     Externe </a>
                </h2> <br>

            </div>

        </form> 

        <div class="apropos">

            {foreach $pathos AS $patho}
                <h3> Patho n° {strval($patho->idp)} </h3>
                <p> desc : {$patho->desc} </p>
            {/foreach}

        <div>

        {include file='footer.tpl'}

    </body>
    <script src="js/test_form.js"></script>
</html>