<!DOCTYPE html>
<html lang="fr">

    {include file='head.tpl'}

    <body>

        {include file='menu.tpl'}

        <h1>MOT CLEF</h1>
        <form id="myBtnContainer" class="btnContainer" action="index_smarty.php?page=mot_clef" method="POST">
            <input type="text" id="name" name="input"  maxlength="20" size="20">
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
    <style>
    body{
        padding:20px;
        margin:20px;
        text-align: center;
    }
    </style>
</html>