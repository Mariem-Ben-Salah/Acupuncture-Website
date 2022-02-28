<!DOCTYPE html>
<html lang="fr">

    {include file='head.tpl'}

    <body>

        {include file='menu.tpl'}

        <h1>PAGE FILTRE</h1>

        <div id="myBtnContainer" class="btnContainer">
            
            <a class="a_filtre" href="index_smarty.php?page=page_filtree"> Afficher tout</a>
            
            <div>
                <h2>Filtrez par Meridien <br>
                    <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=P">     P       </a> 
                    <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=GI">    GI      </a>
                    <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=E">     E       </a> 
                    <a class="a_filtre" href="index_smarty.php?page=page_filtree&filtre_mer=Rte">   Rte     </a>
                </h2> <br>

                <br>    
            </div>  

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

        </div> 

        <div class="apropos">

            {foreach $pathos AS $patho}
                <h3> Patho n° {strval($patho->idp)} </h3>
                <p> desc : {$patho->desc} </p>
            {/foreach}

        <div>

        {include file='footer.tpl'}

    </body>
</html>