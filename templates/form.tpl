<!DOCTYPE html>
<html lang="fr">

    {include file='head.tpl'}

    <body>

        {include file='menu.tpl'}

        <form action="test_form.php" method="GET">



            <input type="checkbox" name="check" onclick="onlyOne(this)">
            <input type="checkbox" name="check" onclick="onlyOne(this)">
            <input type="checkbox" name="check" onclick="onlyOne(this)">
            <input type="checkbox" name="check" onclick="onlyOne(this)">
            <br>

            <button type="submit" name="mon_button"> submit </button>

            <br>

            {"click = "}
            {$click}

        </form>

    </body>

<script src="js/test_form.js"></script>
</html>