<!DOCTYPE html>
<html lang="fr">

    {include file='head.tpl'}

    <body>

        {include file='menu.tpl'}

        <h1>PAGE FILTRE</h1>

        <form id="myBtnContainer" class="mesCheckbox" action="index_smarty.php?page=page_filtree" method="POST">
            
            <a class="a_filtre" href="index_smarty.php?page=page_filtree"> Afficher tout</a>
            
            <br>
            <h2>Filtrez par Meridien </h2>

            <br>
            {foreach $meridiens as $meridien}
             {$meridien}
            <input class ="{$meridien}"   type="checkbox"  name="filtre_mer"  onclick="onlyOne(this)" value="{$meridien}">  <br>
            {/foreach}

  
            <h2> Filtrez par Type </h2>
            <br>
            me      
            <input  type="checkbox"  name="filtre_type"  onclick="onlyOne2(this)" value="me"><span class="checkmark"></span>  <br>    
            m     
            <input  type="checkbox"  name="filtre_type"  onclick="onlyOne2(this)" value="m"><span class="checkmark"></span>  <br>   
            lp     
            <input  type="checkbox"  name="filtre_type"  onclick="onlyOne2(this)" value="lp"><span class="checkmark"></span>  <br>   
            lv     
            <input  type="checkbox"  name="filtre_type"  onclick="onlyOne2(this)" value="lv"><span class="checkmark"></span>  <br>    
            j     
            <input  type="checkbox"  name="filtre_type"  onclick="onlyOne2(this)" value="lv"><span class="checkmark"></span>  <br> 
            <br>   


            <h2> Filtrez par Caracteristiques </h2>
            <br>
            Plein     
            <input  type="checkbox"  name="filtre_car_p" value="p">  <br>    
            Vide   
            <input  type="checkbox"  name="filtre_car_v" value="v">  <br>   
            Froid    
            <input  type="checkbox"  name="filtre_car_f" value="f">  <br>    
            Chaud   
            <input  type="checkbox"  name="filtre_car_c" value="c">  <br>   
            Interne   
            <input  type="checkbox"  name="filtre_car_i"  value="i">  <br>   
            Externe  
            <input  type="checkbox"  name="filtre_car_e"  value="e">  <br>
            Supérieure  
            <input  type="checkbox"  name="filtre_car_s"  value="s">  <br>
            Yin 
            <input  type="checkbox"  name="filtre_car_yin"  value="+">  <br>
            Yang  
            <input  type="checkbox"  name="filtre_car_yang"  value="-">  <br>
            Moyen 
            <input  type="checkbox"  name="filtre_car_m"  value="m">  <br>
            Antérieure  
            <input  type="checkbox"  name="filtre_car_a"  value="a">  <br> 
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
    <style>
    body{
        padding:20px;
        margin:20px;
        text-align: center;
    }
    </style>
</html>