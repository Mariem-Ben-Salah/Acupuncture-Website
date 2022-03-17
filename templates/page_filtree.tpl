<!DOCTYPE html>
<html lang="fr">

    {include file='head.tpl'}

    <body>

        {include file='menu.tpl'}

        <h1>PAGE FILTRE</h1>

        <form id="myBtnContainer" class="btnContainer" action="index_smarty.php?page=page_filtree" method="POST">
            
            <a class="a_filtre" href="index_smarty.php?page=page_filtree"> Afficher tout</a>
            
            <br>
            <h2>Filtrez par Meridien </h2>
            <br>
            P      
            <input class ="P"   type="checkbox"  name="filtre_mer"  onclick="onlyOne(this)" value="P">  <br>
            GI     
            <input class ="GI"  type="checkbox"  name="filtre_mer"  onclick="onlyOne(this)" value="GI">  <br> 
            E      
            <input class ="E"   type="checkbox"  name="filtre_mer"  onclick="onlyOne(this)" value="E">   <br>
            Rte    
            <input class ="Rte" type="checkbox"  name="filtre_mer"  onclick="onlyOne(this)" value="Rte">  <br>
            <br>

  
            <h2> Filtrez par Type </h2>
            <br>
            me      
            <input class ="P"   type="checkbox"  name="filtre_type"  onclick="onlyOne2(this)" value="me">  <br>    
            mi      
            <input class ="P"   type="checkbox"  name="filtre_type"  onclick="onlyOne2(this)" value="mi">  <br>   
            lp      
            <input class ="P"   type="checkbox"  name="filtre_type"  onclick="onlyOne2(this)" value="lp">  <br>   
            lv      
            <input class ="P"   type="checkbox"  name="filtre_type"  onclick="onlyOne2(this)" value="lv">  <br>    
            <br>   


            <h2> Filtrez par Caracteristiques </h2>
            <br>
            Plein     
            <input class ="P"   type="checkbox"  name="filtre_type" value="me">  <br>    
            Chaud   
            <input class ="P"   type="checkbox"  name="filtre_type" value="mi">  <br>   
            Vide   
            <input class ="P"   type="checkbox"  name="filtre_type" value="lp">  <br>   
            Froid    
            <input class ="P"   type="checkbox"  name="filtre_type" value="lv">  <br>    
            Interne   
            <input class ="P"   type="checkbox"  name="filtre_type"  onclick="onlyOne2(this)" value="lp">  <br>   
            Externe  
            <input class ="P"   type="checkbox"  name="filtre_type"  onclick="onlyOne2(this)" value="lv">  <br> 
            <br>


            <button type="submit" name="submit_button"> submit </button>
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